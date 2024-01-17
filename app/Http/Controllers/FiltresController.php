<?php

namespace App\Http\Controllers;
use Paginate;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FiltresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function filtres()
    {
        return view('filtres');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function voir()
    {
        $workers = Worker::All()/*latest()->paginate(6)*/
                 ->SortBy('nom');
        return view ('filtres', ['workers'=>$workers]);
    }

    public function filtrer(Request $request)
    {   
        $experience = $request -> input('experience');
        $poste = $request -> input('poste');
        $conditions = $request -> input('conditions');

        $workers = Worker::select('identite','nom', 'prenom', 'poste', 'experience','conditions')
        ->where('experience','LIKE', $experience)
        ->where('conditions','LIKE', $conditions)
        ->where('poste','LIKE', $poste)
        ->get();
        return view ('filtres', ['workers' => $workers ]);
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

    public function recherche(){
        $workers = Worker::query();

        if (request()->has('experience')){
            $experience = request()->get('experience');
            switch ($experience) {
                case 'moins_un':
                    $workers->where('experience', '<', 1);
                    break;
                case 'un_deux':
                    $workers->whereBetween('experience', [1, 2]);
                    break;
                case 'deux_trois':
                    $workers->whereBetween('experience', [2, 3]);
                    break;
                case 'plus_trois':
                    $workers->where('experience', '>', 3);
                    break;
            }
        }
        return view('filtres',['workers'=>$workers]);
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
