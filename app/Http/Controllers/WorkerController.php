<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /*public function voirworkers()
    {
        return view ('voirworkers');
    }*/
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function voirworkers():View
    {
        $workers=DB::table('worker')
                ->select('*')
                ->get();
        return view ('voirworkers', ['workers'=>$workers]);

        /*$workers = DB::select('select * from worker');

        $workerscollect = collect($workers);

        $perpage = 9;

        $workerspaginated = $workerscollect ->paginate($perpage);

        return view('filtres', ['workers'=> $workerspaginated]);*/
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
