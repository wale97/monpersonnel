@extends('layouts.content')

@section('content')

<div class="workerregister container">
<h1 class="text-center p-4 m-4">TRAVAILLEUR</h1>
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

  <form class="row g-3" method="post" action="{{route('storeworker')}}" enctype="multipart/form-data">
@csrf
      <div class="col-md-5">
        <label for="" class="form-label">Nom</label>
        <input type="text" class="form-control" name="workername" required>
      </div>
      @error('workername')
      <span class="text-danger">{{message}}</span>
      @enderror
      <div class="col-md-5">
        <label for="" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="workersurname" required>
      </div>
      @error('workersurname')
      <span class="text-danger">{{message}}</span>
      @enderror
      <div class="col-md-2">
          <label for="" class="form-label">Age</label>
          <input type="text" class="form-control" name="workerage" required>
        </div>
        @error('workerage')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-6">
          <label for="" class="form-label">Telephone</label>
          <input type="text" class="form-control" name="workertel" required>
        </div>
        @error('workertel')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-6">
          <label for="" class="form-label">Email</label>
          <input type="text" class="form-control" name="workermail" required>
        </div>
        @error('workermail')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-3">
          <label for="" class="form-label">Poste Recherché</label>
          <select class="form-select" name="workerposte" required>
            <option selected disabled value="">Choisir...</option>
            <option>Cuisine Africaine</option>
            <option>Cuisine Europeenne</option>
            <option>Cuisine Arabe</option>
            <option>Lessive</option>
            <option>Repassage</option>
            <option>Chauffeur</option>
            <option>Coursier</option>
            <option>Nounou</option>
            <option>Nettoyage</option>
            <option>Gouvernante</option>
            <option>Malades à Domicile</option>
            <option>Personnes Agées</option>
            <option>Enfants Handicapés</option>
          </select>
        </div>
        @error('workerposte')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-6">
          <label for="" class="form-label">Experience</label>
          <select class="form-select" name="workerexp" required>
            <option selected disabled value="">Choisir...</option>
            <option>< 6 mois</option>
            <option> 1 + </option>
            <option> 2 + </option>
            <option> 3 + </option>
            <option> 4 + </option>
            <option> 5 + </option>
          </select>
        </div>
        @error('workerexp')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-3">
          <label for="" class="form-label">Conditions de Travail</label>
          <select class="form-select"  name="workercondition" required>
            <option selected disabled value="">Choisir...</option>
            <option>Temps plein</option>
            <option>Temps partiel</option>
          </select>
        </div>
        @error('workercondition')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-3">
          <label for="" class="form-label">Prise en Charge alimentaire</label>
          <select class="form-select" name="workerprisecharge" required>
            <option selected disabled value="">Choisir...</option>
            <option>Oui</option>
            <option>Non</option>
          </select>
        </div>
        @error('workerprisecharge')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-3">
          <label for="" class="form-label">Logé?</label>
          <select class="form-select" name="workerlogement"  required>
            <option selected disabled value="">Choisir...</option>
            <option>Oui</option>
            <option>Non</option>
            <option>Peu importe</option>
          </select>
        </div>
        @error('workerlogement')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="row pt-4 pb-4">
          <div class="col-md-4">
          <label for="" class="form-label">Paie Envisagee</label>
          <input type="text" class="form-control" name="workerpaie" required>
        </div>
        @error('workerpaie')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-4">
          <label for="" class="form-label">Début</label>
          <select class="form-select" name="workerdebut" required>
              <option selected disabled value="">Choisir...</option>
              <option>1 - 3 jours</option>
              <option>Une semaine</option>
              <option>Deux semaines</option>
              <option>Un mois</option>
            </select>          
          </div>
        </div>
        @error('workerdebut')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="row pt-2 pb-2">
          <div class="col-md-4">
              <label for="exampleFormControlFile1">Ajouter Piece d'identite</label>
              <input type="file" class="form-control-file rounded pt-2" name="workerid" accept=".jpg, .jpeg, .png" required>
          </div>
          @error('workerid')
          <span class="text-danger">{{message}}</span>
          @enderror
          <div class="col-md-4">
            <label for="exampleFormControlFile1">Ajouter Casier Judiciaire</label>
            <input type="file" class="form-control-file rounded pt-2" name="workercasier" accept=".jpg, .jpeg, .png, .pdf" required>
        </div>
        @error('workercasier')
        <span class="text-danger">{{message}}</span>
        @enderror
        <div class="col-md-4">
          <label for="exampleFormControlFile1">Ajouter Photo</label>
          <input type="file" class="form-control-file rounded pt-2" name="workerphoto" accept=".jpg, .jpeg, .png" required>
      </div>
        </div>
        @error('workerphoto')
        <span class="text-danger">{{message}}</span>
        @enderror

      <div class="col-md-6">
        <label for="validationServer03" class="form-label">Ville</label>
        <input type="text" class="form-control" name="workerville" required>
      </div>
      @error('workerville')
      <span class="text-danger">{{message}}</span>
      @enderror
      <div class="col-md-3">
        <label for="validationServer04" class="form-label">Quartier</label>
        <input type="text" class="form-control" name="workerquartier" required>
      </div>
      @error('workerquartier')
      <span class="text-danger">{{message}}</span>
      @enderror
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="" aria-describedby="" required>
          <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
          </label>
        </div>
      </div>
      <div class="col-12 pb-4">
        <button class="btn btn-primary" type="submit">Envoyer</button>
      </div>
    </form>
</div>




@endsection