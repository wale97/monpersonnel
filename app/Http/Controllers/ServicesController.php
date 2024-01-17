<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cuisine()
    {
        return view('services.cuisine');
    }

    public function coursier()
    {
        return view ('services.coursier');
    }

    public function personneldemaison()
    {
        return view ('services.personnelmaison');
    }    

    public function nettoyage()
    {
        return view ('services.nettoyage');
    }   
    
    public function nursing()
    {
        return view ('services.nursing');
    }    
    
    public function nounou()
    {
        return view ('services.nounou');
    }
    
    public function chauffeur()
    {
        return view ('services.chauffeur');
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
