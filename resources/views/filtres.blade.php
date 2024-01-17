@extends('layouts.content')


@section('content')
<div class="container filtrespage">
    <div class="col-3 filtres m-4" style="margin-top:125px;">
        <form action={{route('filtrer')}} method="post" class="d-flex flex-column" role="search" style="margin-top:125px;">
            @csrf
            <div class="experience pt-2">
                <label for="experience">Experience</label>
                <select class="form-select" name="experience" id="experience">
                    <option></option>
                    <option name="moins_6m"> < 6 mois </option> 
                    <option name="plus_un"> 1 + </option>
                    <option name="plus_deux"> 2 + </option>
                    <option name="plus_trois"> 3 + </option>
                    <option name="plus_quatre"> 4 +</option>
                    <option name="plus_cinq"> 5 +</option>
                </select>
            </div>
            
            <!--<div class="age pt-2">
                <label for="age">Age (20 - 35)</label>
                <!-<input type="text" class="form-control">-->
                <!--<input type="range" class="form-range" min="20" max="35" step="5" id="customRange2">
                <select class="form-select" name="age" id="age">
                    <option></option> 
                    <option name=""> 20 - 25 </option>
                    <option name=""> 25 - 30 </option>
                    <option name=""> 30 - 35 </option>
                </select>
            </div>-->
            <div class="conditions pt-2">
                <label for="conditions">Conditions</label>
                <select class="form-select" name="conditions" id="conditions">
                    <option></option>
                    <option name="plein"> Temps plein </option> 
                    <option name="partiel"> Temps partiel </option>
                </select>
            </div>
            <div class="poste pt-2 pb-4">
                <label for="poste">Poste</label>
                <select class="form-select" name="poste" id="poste">
                    <option></option>
                    <option name="Cui_AF">Cuisine Africaine</option> 
                    <option name="Cui_Eur">Cuisine Europeenne</option> 
                    <option name="Cui_AR">Cuisine Arabe</option> 
                    <option name="Less">Lessive</option> 
                    <option name="Rep">Repassage</option> 
                    <option name="Chauf">Chauffeur</option> 
                    <option name="Cour">Coursier</option> 
                    <option name="Nou">Nounou</option> 
                    <option name="Net">Nettoyage</option> 
                    <option name="Gouv">Gouvernante</option> 
                    <option name="Mal_Dom">Malades à Domicile</option> 
                    <option name="Pers_Ag">Personnes Agées</option>
                    <option name="Handi">Enfants Handicapés</option> 

                </select>
            </div>

            <button class="btn" type="submit">Rechercher</button>
        </form>
    </div>
    <div class=" row col-9 m-4">
        <h1 class="text-center" style=" margin-left:150px;margin-top:125px;">Recherche Avancee</h1>

        @if(count($workers) > 0)
            @foreach($workers as $worker)
                <div class="card text-center mb-3 m-2 d-flex flex-column align-items-center profile-card" id="macard" style="width: 14rem;">
                    <div class="card-body m-2">
                        <img src="{{asset('storage/uploads/'.$worker->identite)}}" class="card-img-top profile-image justify-content-center align-items-center" alt="...">
                        <div class="infos pb-2">
                            <h5 class="card-title">{{$worker->nom}}</h5>
                            <h5 class="card-title">{{$worker->prenom}}</h5>
                            <p class="card-text">{{$worker->poste}}</p>
                            <p class="card-text">{{$worker->conditions}}</p>
                            <p class="card-text">{{"experience : ".$worker->experience}}</p>

                        </div>
                        <a href="" class="btn btn-primary btnrecruter" onclick = "grisercard()">Recruter</a>
                        <!-- Button trigger modal -->

                    </div>
                </div>
            @endforeach
        @else
            <p class="nofoundmessage text-center" style="margin-left:150px; margin-top:100px;">No Workers Found</p>
        @endif

    </div>
</div>
<script src={{asset("js/script.js")}}></script>

@endsection