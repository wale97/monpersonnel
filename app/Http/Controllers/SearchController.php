<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
   /* public function voirworkers()
    {
        return view ('voirworkers');
    }*/

    public function search (Request $request)
    {
        $data = Worker::select("nom","prenom","experience", "poste", "conditions", "prise_en_charge","logement", "paie","debut","quartier")
                        ->where('nom','LIKE','%'.$request->get('search').'%')
                        ->orwhere('prenom','LIKE','%'.$request->get('search').'%') 
                        ->orwhere('experience','LIKE','%'.$request->get('search').'%')
                        ->orwhere('poste','LIKE','%'.$request->get('search').'%')
                        ->orwhere('conditions','LIKE','%'.$request->get('search').'%')
                        ->orwhere('prise_en_charge','LIKE','%'.$request->get('search').'%')
                        ->orwhere('logement','LIKE','%'.$request->get('search').'%')
                        ->orwhere('paie','LIKE','%'.$request->get('search').'%')
                        ->orwhere('debut','LIKE','%'.$request->get('search').'%')
                        ->orwhere('quartier','LIKE','%'.$request->get('search').'%')
                        ->get();
                        return view ('resultssearch',['workers'=>$data]);

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
        //
    }

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
