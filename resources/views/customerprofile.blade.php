@extends('layouts.content')

@section('content')



<div class="container" style="margin-top:125px;">
  <header>
    <div class="avatar">
      <img src="{{asset('storage/uploads/'.$user->photo)}}" class="profile-image" alt="Avatar">
    </div>


  </header>
  <main>
    <section class="biographie">
      <h2>Biographie</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit labore libero, 
        tempora nostrum autem voluptatibus reiciendis sapiente expedita quibusdam inventore
         ullam modi quidem dolorum aspernatur commodi magni laudantium eveniet dolore.</p>
    </section>
    <section class="statistiques">
      <h2>Statistiques</h2>
      <ul>
        <li>Recrutements : 100</li>
      </ul>
    </section>
    <section class="activités">
      <h2>Activités récentes</h2>
      <ul>
 
      </ul>
    </section>
  </main>
</div>


@endsection