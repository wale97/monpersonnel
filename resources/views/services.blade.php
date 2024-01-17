@extends('layouts.content')

@section('content')
<section class="cards">

<h1 class="text-center m-4">SERVICES</h1>


<div class="group-card container mt-4 ">
    <div class="card mb-4 text-center" style="width: 35rem;margin:3px;">
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Cuisine</h5>
        <p class="card-text">Que ce soit en tant que débutants, professionnels confirmés ou experts chevronnés,
             nos chefs talentueux excelleront dans la préparation de plats authentiques et internationaux, 
             avec des desserts délicieux et une présentation élégante, adaptée à leur niveau d'expertise.</p>
             <a href={{route('cuisine')}} class="btn btn-outline-dark mt-auto btn-lg btn-block">En Savoir Plus</a>

      </div>
    </div>
    <div class="card mb-4 text-center" style="width: 35rem;margin:3px;">
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title text-truncate">Nettoyage</h5>
        <p class="card-text">Que vous ayez besoin de services de nettoyage de base, de niveaux d'expertise intermédiaires
             ou de maîtrise totale, nos équipes de propreté se surpassent dans l'art du nettoyage, de l'entretien
              domestique à la propreté industrielle, avec un savoir-faire adapté à chaque niveau.</p>
              <a href={{route('nettoyage')}} class="btn btn-outline-dark mt-auto btn-lg btn-block">En Savoir Plus</a>

      </div>
    </div>
    <div class="card mb-4 text-center" style="width: 35rem;margin:3px";>
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Chauffeur</h5>
        <p class="card-text">Que vous recherchiez un conducteur débutant, un chauffeur expérimenté ou un expert de la route,
             nos chauffeurs sont prêts à vous offrir un service de conduite exceptionnel. Ils sont capables de s'adapter
              à vos besoins, que ce soit pour des trajets locaux ou internationaux, en mettant en avant leur expertise
               selon leur niveau de compétence.</p>
               <a href={{route('chauffeur')}} class="btn btn-outline-dark mt-auto btn-lg btn-block">En Savoir Plus</a>

      </div>
    </div>
</div>
<div class="group-card container mt-4 ">
    <div class="card mb-4 text-center" style="width: 35rem;margin:3px;">
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Coursier</h5>
        <p class="card-text">
          Que vous ayez besoin d'un coursier débutant, d'un livreur expérimenté ou d'un expert de la livraison, nos équipes de 
          coursiers sont prêtes à vous offrir un service de livraison impeccable. Ils s'adaptent à vos besoins, qu'il s'agisse de 
          livrer des colis localement ou d'assurer des transports internationaux, en mettant en avant leurs compétences en fonction
          de leur niveau d'expérience.</p>
          <a href={{route('coursier')}} class="btn btn-outline-dark mt-auto btn-lg btn-block">En Savoir Plus</a>

      </div>
    </div>
    <div class="card mb-4 text-center" style="width: 35rem;margin:3px;">
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title text-truncate">Nursing</h5>
        <p class="card-text">
          Que vous ayez besoin de soins à domicile de base, de services infirmiers expérimentés ou de l'expertise d'une équipe de santé
           chevronnée, nos professionnels de la santé sont là pour vous offrir des soins de qualité. Ils s'adapteront à votre niveau de
            besoin, que ce soit pour des soins courants ou des situations médicales complexes, en mettant en avant leur compétence en 
            fonction de votre situation.</p>
            <a href={{route('nursing')}} class="btn btn-outline-dark mt-auto btn-lg btn-block">En Savoir Plus</a>

      </div>
    </div>
    <div class="card mb-4 text-center" style="width: 35rem;margin:3px";>
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Personnel de maison</h5>
        <p class="card-text">Qu'il s'agisse d'employés domestiques en formation, de professionnels confirmés ou d'experts en gestion de maison,
           notre personnel dédié à l'entretien et au service se distingue par sa polyvalence. Ils sont prêts à prendre en charge vos besoins 
           domestiques, de l'entretien général à la gestion de résidences de luxe, avec une expertise adaptée à chaque niveau.</p>
           <a href={{route('personnel')}} class="btn btn-outline-dark mt-auto btn-lg btn-block">En Savoir Plus</a>

      </div>
    </div>
</div>
<div class="group-card container mt-4">
    <div class="card mb-4 text-center" style="width: 35rem;margin:3px;">
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Nounou</h5>
        <p class="card-text">Que vous ayez besoin d'une nounou en herbe, d'une professionnelle chevronnée ou d'une experte de la garde d'enfants,
           nos gardiennes d'enfants sont là pour répondre à vos besoins spécifiques. Elles sont compétentes dans la prise en charge et
            l'épanouissement de vos enfants, adaptant leur approche en fonction de leur niveau d'expérience..</p>
            <a href={{route('nounou')}} class="btn btn-outline-dark mt-auto btn-lg btn-block">En Savoir Plus</a>

      </div>
    </div>
    <!--<div class="card mb-4 text-center" style="width: 25rem;margin:3px;"">
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-truncate">Divertissements</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn">Lire Plus  <i class="fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
    <div class="card mb-4 text-center" style="width: 25rem;margin:3px";">
      <img class="card-img-top" src="images\IMG_20221209_143252.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Culture</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn">Lire Plus  <i class="fa-solid fa-arrow-right"></i></a>

      </div>
    </div>-->
</div>
</section>

@endsection