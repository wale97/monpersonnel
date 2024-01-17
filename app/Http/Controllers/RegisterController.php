<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function worker()
    {
        return view('auth.workerregister');
    }

    public function customer()
    {
        return view('auth.customerregister');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'selectnom'=>'required',
            'selectprenom'=>'required',
            'selectage'=>'required',
            'selecttel'=>'required',
            'selectemail'=>'required',
            'selectpass'=>'required',
            'selectcpass'=>'required',
            'selectposte'=>'required',
            'selectcondition'=>'required',
            'selectprisecharge'=>'required',
            'selectlogement'=>'required',
            'selectbudget'=>'required',
            'selectdebut'=>'required',
            'selectfile'=>'required|file|mimes:jpg,jpeg,png',
            'selectphoto'=>'required|file|mimes:jpg,jpeg,png',
            'selectville'=>'required',
            'selectquartier'=>'required'

        ]);


        //get filename

        $fileName = time().'id'.'.'.$request->selectfile->extension();
       $request->selectfile->storeAs('public/uploads', $fileName);

       $fileName2 = time().'ph'.'.'.$request->selectphoto->extension();
       $request->selectphoto->storeAs('public/uploads', $fileName2);
       

        $customer = new Customer();
        $customer->nom=$request->input('selectnom');
        $customer->prenom=$request->input('selectprenom');
        $customer->age=$request->input('selectage');
        $customer->telephone=$request->input('selecttel');
        $customer->email=$request->input('selectemail');
        $customer->password=Hash::make($request->input('selectpass'));
        $customer->cpassword=Hash::make($request->input('selectcpass'));
        $customer->poste=$request->input('selectposte');
        $customer->conditions=$request->input('selectcondition');
        $customer->prise_en_charge=$request->input('selectprisecharge');
        $customer->logement=$request->input('selectlogement');
        $customer->budget=$request->input('selectbudget');
        $customer->debut=$request->input('selectdebut');
        $customer->identite=$fileName;
        $customer->photo=$fileName2;
        $customer->ville=$request->input('selectville');
        $customer->quartier=$request->input('selectquartier');
        $customer->save();


        return back()->with('successMessage','Bravo! Votre requete a été créée avec succès');
                     //->with('file',$fileName);

    }

    public function storeworker(Request $request)
    {
        $request->validate([
            'workername'=>'required',
            'workersurname'=>'required',
            'workerage'=>'required',
            'workertel'=>'required',
            'workermail'=>'required',
            'workerposte'=>'required',
            'workercondition'=>'required',
            'workerprisecharge'=>'required',
            'workerlogement'=>'required',
            'workerpaie'=>'required',
            'workerdebut'=>'required',
            'workerid'=>'required|file|mimes:jpg,jpeg,png',
            'workercasier'=>'required|file|mimes:jpg,jpeg,png,pdf',
            'workerphoto'=>'required|file|mimes:jpg,jpeg,png',
            'workerville'=>'required',
            'workerquartier'=>'required'

        ]);


        //get filename

        $fileName1 = time().'id'.'.'.$request->workerid->extension();
        $request->workerid->storeAs('public/uploads', $fileName1);

        $fileName2 = time().'cs'.'.'.$request->workercasier->extension();
        $request->workercasier->storeAs('public/uploads', $fileName2);

        $fileName3 = time().'ph'.'.'.$request->workerphoto->extension();
        $request->workerphoto->storeAs('public/uploads', $fileName3);
        


        $worker = new Worker();
        $worker->nom=$request->input('workername');
        $worker->prenom=$request->input('workersurname');
        $worker->telephone=$request->input('workertel');
        $worker->age=$request->input('workerage');
        $worker->email=$request->input('workermail');
        $worker->poste=$request->input('workerposte');
        $worker->experience=$request->input('workerexp');
        $worker->conditions=$request->input('workercondition');
        $worker->prise_en_charge=$request->input('workerprisecharge');
        $worker->logement=$request->input('workerlogement');
        $worker->paie=$request->input('workerpaie');
        $worker->debut=$request->input('workerdebut');
        $worker->identite=$fileName1;
        $worker->casier=$fileName2;
        $worker->photo=$fileName3;
        $worker->ville=$request->input('workerville');
        $worker->quartier=$request->input('workerquartier');
        $worker->save();



        return back()->with('successMessage','Bravo! Votre requete a été créée avec succès');

    }

   /* public function url(){
        $worker = Worker::find(1);

        $pictureUrl = asset('storage/uploads/'.$worker->identite);
    
        return view('index', ['pictureUrl' => $pictureUrl]);
    }*/

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
