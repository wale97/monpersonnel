<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login()
    {
        return view ('auth.login');
    }

  /*  public function dologin(Request $request)
    {

     
            $email = $request->input('email');

            $password = $request->input('password');

        
            $customer = Customer::where('email', $email)->first();
        
            if ($customer && $customer->email === $email && Hash::check($password, $customer->password)) {

                Auth::login($customer);

                $user = Auth::user();

                $photo = Auth::user()->photo;
        
               //return view ('customerprofile',$user);
               return redirect()->route('customerprofile');
            } else {
                return back()->withErrors([
                    'email' => ['Les informations de connexion sont incorrectes.'],
                ]);
            }
    }*/

    public function dologin (Request $request)
    {
        $credentials = $request->only(['email','password']);
 
     

        if (Auth::attempt($credentials)) {



            $request->session()->regenerate();
            


            return redirect()->route('customerprofile');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('Message','Vous êtes maintenant déconnecté.');
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
