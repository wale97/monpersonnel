@extends('layouts.content')

@section('content')

<div class="container" style="margin-top:300px;">
  <h1 class="d-flex justify-content-center">All Workers</h1>
  @if(count($workers) > 1)
  <div class="container">
       <table id="dtBasicExample" class="table table-bordered table-striped">
       <thead>
         <tr>
    
            <th scope="col">Nom  <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a> </th>
            <th scope="col">Prenom  <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Experience  <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Poste <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Conditions <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Prise en Charge <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Logement <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Paie <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Debut <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
           <th scope="col">Quartier <a href="" class="text-black"><i class="fa-solid fa-arrow-up"><i class="fa-solid fa-arrow-down"></i></i></a></th>
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
           <!--<td><a href='{{asset('storage/uploads/'.$worker->identite)}}'>{{asset('storage/uploads/'.$worker->identite)}} <img src="{{asset('storage/uploads/'.$worker->identite)}}" alt=""></a></td>-->
         </tr>
       @endforeach
       </tbody>
     </table>
  </div>

  @else
     <p>No Workers FOund</p>
  @endif
</div>

 <!-- <a href="../pages" class="link-secondary mt-4">Page Principale</a>-->




    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    

@endsection