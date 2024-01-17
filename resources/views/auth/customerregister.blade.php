@extends('layouts.content')

@section('content')
<div class="customerregister container">
<H1 class="text-center p-4 m-4">CLIENT</H1>
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
    <form method="post" action="{{route('store')}}" enctype="multipart/form-data" class="row g-3">
    @csrf
        <div class="col-md-5">
          <label for="" class="form-label">Nom</label>
          <input type="text" class="form-control" name="selectnom" required>
        </div>
        @error('nom')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        <div class="col-md-5">
          <label for="" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="selectprenom" required>
        </div>
        @error('prenom')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        <div class="col-md-2">
            <label for="" class="form-label">Age</label>
            <input type="text" class="form-control" name="selectage" required>
          </div>
          @error('age')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="col-md-6">
            <label for="" class="form-label">Telephone</label>
            <input type="text" class="form-control" name="selecttel" required>
          </div>
          @error('telephone')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="col-md-6">
            <label for="" class="form-label">Email</label>
            <input type="text" class="form-control" name="selectemail" required>
          </div>
          @error('email')
          <span class="text-danger">{{ $message }}</span>
      @enderror
      <div class="col-md-6">
        <label for="" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="selectpass" required>
      </div>
      @error('password')
      <span class="text-danger">{{ $message }}</span>
  @enderror
      <div class="col-md-6">
        <label for="" class="form-label">Confirmer mot de passe</label>
        <input type="password" class="form-control" name="selectcpass" required>
      </div>
      @error('cpassword')
      <span class="text-danger">{{ $message }}</span>
  @enderror
          <div class="col-md-3">
            <label for="" class="form-label">Poste Recherché</label>
            <select class="form-select" name="selectposte"  required>
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
          @error('selectposte')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="col-md-3">
            <label for="" class="form-label">Conditions de Travail</label>
            <select class="form-select" name="selectcondition" required>
              <option selected disabled value="">Choisir...</option>
              <option>Temps plein</option>
              <option>Temps partiel</option>
            </select>
          </div>
          @error('selectcondition')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="col-md-3">
            <label for="" class="form-label">Prise en Charge alimentaire</label>
            <select class="form-select" name="selectprisecharge"  required>
              <option selected disabled value="">Choisir...</option>
              <option>Oui</option>
              <option>Non</option>
            </select>
          </div>
          @error('selectprisecharge')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="col-md-3">
            <label for="" class="form-label">Logé?</label>
            <select class="form-select" name="selectlogement"  required>
              <option selected disabled value="">Choisir...</option>
              <option>Oui</option>
              <option>Non</option>
              <option>Peu importe</option>
            </select>
          </div>
          @error('selectlogement')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="row pt-4 pb-4">
            <div class="col-md-4">
            <label for="" class="form-label">Budget Prévu</label>
            <input type="text" class="form-control" name="selectbudget" required>
          </div>
          @error('budget')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="col-md-4">
            <label for="" class="form-label">Début</label>
            <select class="form-select" name="selectdebut"  required>
                <option selected disabled value="">Choisir...</option>
                <option>1 - 3 jours</option>
                <option>Une semaine</option>
                <option>Deux semaines</option>
                <option>Un mois</option>
              </select>          
            </div>
          </div>
          @error('selectdebut')
          <span class="text-danger">{{ $message }}</span>
      @enderror
          <div class="row pt-2 pb-2">
            <div class="col-md-4">
                <label for="exampleFormControlFile1">Ajouter Copie Piece d'identite</label>
                <input type="file" class="form-control-file rounded pt-2" name="selectfile" accept=".jpg, .jpeg, .png" required>
            </div>
          </div>
          @error('selectfile')
          <span class="text-danger">{{ $message }}</span>
      @enderror
      <div class="row pt-2 pb-2">
        <div class="col-md-4">
            <label for="exampleFormControlFile1">Ajouter Photo</label>
            <input type="file" class="form-control-file rounded pt-2" name="selectphoto" accept=".jpg, .jpeg, .png" required>
        </div>
      </div>
      @error('selectphoto')
      <span class="text-danger">{{ $message }}</span>
  @enderror
        <div class="col-md-6">
          <label for="validationServer03" class="form-label">Ville</label>
          <input type="text" class="form-control" name="selectville" required>
        </div>
        @error('ville')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        <div class="col-md-3">
          <label for="validationServer04" class="form-label">Quartier</label>
          <input type="text" class="form-control" name="selectquartier" required>
        </div>
        @error('quartier')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="terms" required>
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