<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('home');
    }
    public function home2()
    {
        return view ('home2');
    }
    /*public function index2()
    {
        return view('home2');
    }*/
    public function register()
    {
        return view('register');
    }
    public function services()
    {
        return view ('services');
    }
    public function contact()
    {
        return view ('contact');
    }
    public function connexion()
    {
        return view ('connexion');
    }
    public function disclaimer()
    {
        return view ('disclaimer');
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
