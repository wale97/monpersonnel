@extends('layouts.content')


@section('content')


@if(Session::get('success'))
<div class="alert alert-success"></div>
  {{Session::get('success')}}
@endif

@if(Session::get('fail'))
<div class="alert alert-danger"></div>
  {{Session::get('fail')}}~
@endif

@if ($message = Session::get('successMessage'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="workerregister container">
  <form class="row g-3">
@csrf
      <div class="col-md-5">
        <label for="" class="form-label">Nom</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="col-md-5">
        <label for="" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="surname" required>
      </div>
      <div class="col-md-2">
          <label for="" class="form-label">Age</label>
          <input type="text" class="form-control" name="age" required>
        </div>
        <div class="col-md-6">
          <label for="" class="form-label">Telephone</label>
          <input type="text" class="form-control" name="tel" required>
        </div>
        <div class="col-md-6">
          <label for="" class="form-label">Email</label>
          <input type="text" class="form-control" name="adressemail" required>
        </div>
        <div class="col-md-3">
          <label for="" class="form-label">Poste Recherché</label>
          <select class="form-select" name="selectposte" required>
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
        <div class="col-md-3">
          <label for="" class="form-label">Conditions de Travail</label>
          <select class="form-select"  name="selectconditiontravail" required>
            <option selected disabled value="">Choisir...</option>
            <option>Temps plein</option>
            <option>Temps partiel</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="" class="form-label">Prise en Charge alimentaire</label>
          <select class="form-select" name="selectpriseencharge" required>
            <option selected disabled value="">Choisir...</option>
            <option>Oui</option>
            <option>Non</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="" class="form-label">Logé?</label>
          <select class="form-select" name="selectlogement"  required>
            <option selected disabled value="">Choisir...</option>
            <option>Oui</option>
            <option>Non</option>
            <option>Peu importe</option>
          </select>
        </div>
        <div class="row pt-4 pb-4">
          <div class="col-md-4">
          <label for="" class="form-label">Paie Envisagee</label>
          <input type="text" class="form-control" name="paieE" required>
        </div>
        <div class="col-md-4">
          <label for="" class="form-label">Début</label>
          <select class="form-select" name="selectdebut" required>
              <option selected disabled value="">Choisir...</option>
              <option>1 - 3 jours</option>
              <option>Une semaine</option>
              <option>Deux semaines</option>
              <option>Un mois</option>
            </select>          
          </div>
        </div>
        <div class="row pt-2 pb-2">
          <div class="col-md-4">
              <label for="exampleFormControlFile1">Ajouter Piece d'identite</label>
              <input type="file" class="form-control-file rounded pt-2" name="selectid" required>
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlFile1">Ajouter Casier Judiciaire</label>
            <input type="file" class="form-control-file rounded pt-2" name="selectcasier" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlFile1">Ajouter Photo</label>
          <input type="file" class="form-control-file rounded pt-2" name="selectphoto" required>
      </div>
        </div>

      <div class="col-md-6">
        <label for="validationServer03" class="form-label">Ville</label>
        <input type="text" class="form-control" id="" aria-describedby="validationServer03Feedback" required>
      </div>
      <div class="col-md-3">
        <label for="validationServer04" class="form-label">Quartier</label>
        <input type="text" class="form-control" id="" value="" required>
      </div>

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
