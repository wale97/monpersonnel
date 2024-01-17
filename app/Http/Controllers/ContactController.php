<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function contacter()
    {

        return view ('contact');

    }

    public function envoi(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:13',
            'sujet'=>'required',
            'message' => 'required'
        ]);

        //storing data
       Contact::create($request->all());

        
        return back()->with('successMessage','Merci de nous contacter');
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
