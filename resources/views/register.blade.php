@extends('layouts.content')

@section('content')

<div class="inscription d-flex flex-row justify-content-center align-items-center">
  <div class="col-4"></div>
  <div class="col-4 d-flex flex-row text-center">
    <div class="p-4" style="font-size:36px;">
      <a href={{route('client')}} class="text-black">Je suis un client</a>
    </div>
    <div class="p-4" style="font-size:36px;">
      <a href={{route('travailleur')}} class="text-black">Je suis un prestataire</a>
    </div>
  </div>
  <div class="col-4"></div>
</div>


@endsection