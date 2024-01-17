@extends('layouts.content')


@section('content')
<div class="container">


<h1 class="text-center p-4 m-4">CONNECTEZ VOUS</h1>
@if(Session::get('success'))
<div class="alert alert-success"></div>
  {{Session::get('success')}}
@endif

@if(Session::get('fail'))
<div class="alert alert-danger"></div>
  {{Session::get('fail')}}
@endif

@if ($message = Session::get('successMessage'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif


<form method="post" action="{{route('dologin')}}">

    @csrf

    <div class="container text-center m-4">
        <div class="row">
            <h1 class="contactus pt-4 m-4">CONNECTEZ-VOUS</h1>
          <div class="col-3">
          </div>
          <div class="col-6">
            <div class="form-group row">
                <label for="inputmail" class="col-sm-2 col-form-label m-4">Email</label>
                <div class="col">
                    <input name="email" type="email" class="form-control m-4" id="inputmail" placeholder="Email" required>
                </div>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputpass" class="col-sm-2 col-form-label m-4">Password</label>
                <div class="col">
                    <input name="password" type="password" class="form-control m-4" id="inputpass" placeholder="Password" required>
                </div>
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <div class="col mt-4 mb-4">
                    <a href="{{route('register')}}" class="text-dark">Creer un nouveau compte?</a>
                </div>
            </div>

            <div class="col m-4 justify-content-center">
                <button name="envoyer" type="submit" class="btn btn-danger text-center">Se connecter</button>
            </div>
        </div>
          <div class="col-3"></div>
        </div>
      </div>
  </form>

</div>
@endsection