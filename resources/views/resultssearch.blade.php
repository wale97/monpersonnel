@extends('layouts.content')

@section('content')

<div class="container" style="margin-top:300px;">
  <h1 class="d-flex justify-content-center">All Workers</h1>
  @if(count($workers) > 0)
   <table id="dtBasicExample" class="table table-bordered table-striped table-sm">
       <thead>
         <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Experience</th>
           <th scope="col">Poste</th>
           <th scope="col">Conditions</th>
           <th scope="col">Prise en Charge</th>
           <th scope="col">Logement</th>
           <th scope="col">Paie</th>
           <th scope="col">Debut</th>
           <th scope="col">Quartier</th>

         </tr>
       </thead>
       <tbody>
       @foreach($workers as $worker)
         <tr>
          <td>{{$worker->nom}}</td>
          <td>{{$worker->prenom}}</td>
           <td>{{$worker->experience}}</td>
           <td>{{$worker->poste}}</td>
           <td>{{$worker->conditions}}</td>
           <td>{{$worker->prise_en_charge}}</td>
           <td>{{$worker->logement}}</td>
           <td>{{$worker->paie}}</td>
           <td>{{$worker->debut}}</td>
           <td>{{$worker->quartier}}</td>
           <!--<td><a href='{{asset('public/storage/uploads/'.$worker->identite)}}'>{{asset('public/storage/uploads/'.$worker->identite)}}</a></td>
           <td><img src="{{asset('storage/app/public/uploads'.$worker->identite)}}" alt=""></td>-->

         </tr>
       @endforeach
       </tbody>
     </table>
  @else
     <p>No Workers FOund</p>
  @endif
</div>

 <!-- <a href="../pages" class="link-secondary mt-4">Page Principale</a>-->




    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    

@endsection