<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href={{asset('images/favicon.png')}} rel="icon" type="image/x-icon">
    <title>MonPersonnel.bj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/6d876d02ce.js" crossorigin="anonymous"></script>
  </head>
  <body class="container">
      @include('partials.header')
    
    <div class="contain" style="margin-top: 116px">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src={{asset('images/IMG_1224.jpg')}} class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src={{asset('images/IMG_20221209_143252.png')}} class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src={{asset('images/IMG_1224.jpg')}} class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class=" text-center p-4 m-4">
      <h2>What we do</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quam tempora fugiat obcaecati,
         perspiciatis dolore voluptatum numquam. Obcaecati quisquam repellendus saepe neque officia animi placeat
          velit natus. Veritatis, velit ut!
      </p>
    </div>
    <div id="services" class="text-center bg-dark text-white p-4">
      <!--<div class="row text-center">
        <h2 class="who mb-4 mt-4 pb-4 pt-4">Que faisons-nous?</h2>
      </div>-->
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col">
          <i class="fa-solid fa-house fa-5x m-4"></i>
            <h4 class="who">Personnel de Maison</h4>
            <p class="text-center break-word m-4">Découvrez notre sélection minutieuse de profils qualifiés pour votre foyer. Des personnes dévouées et compétentes pour répondre à vos besoins domestiques avec professionnalisme et fiabilité</p>
        </div>
        <div class="col">
          <i class="fa-solid fa-truck-fast fa-5x m-4"></i>                
          <h4 class="who">Coursier</h4>
          <p class="text-center break-word m-4">Explorez notre équipe de coursiers dynamiques et efficaces. Des professionnels rapides et fiables, prêts à livrer vos colis et documents avec précision et ponctualité.. </p>
        </div>
        <div class="col">
          <i class="fa-solid fa-utensils fa-5x m-4"></i>                
          <h4 class="who">Cuisinier</h4>
          <p class="text-center break-word m-4">Découvrez nos talentueux cuisiniers passionnés. Des experts culinaires créatifs et expérimentés pour offrir des saveurs exquises et des plats raffinés à votre table avec savoir-faire.</p>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col">
          <i class="fa-solid fa-car-side fa-5x m-4"></i>                
          <h4 class="who">Chauffeur</h4>
          <p class="text-center break-word m-4">Explorez notre équipe de chauffeurs expérimentés et fiables. Des professionnels dédiés à vous offrir un service de conduite sûr, confortable et ponctuel, à tout moment.</p>
        </div>
        <div class="col">
          <i class="fa-solid fa-person-breastfeeding fa-5x m-4"></i>
          <h4 class="who">Nounou</h4>
          <p class="text-center break-word m-4">Découvrez notre sélection attentive de nounous bienveillantes et expérimentées. Des professionnels dévoués à offrir un environnement sécurisé et stimulant pour le bien-être de vos enfants.</p>
        </div>
        <div class="col">
          <i class="fa-solid fa-hand-holding-heart fa-5x m-4"></i>                
          <h4 class="who">Nursing</h4>
          <p class="text-center break-word m-4">Découvrez notre équipe de professionnels en nursing dédiés et attentionnés. Des soignants expérimentés fournissant des soins personnalisés et un soutien attentif pour votre bien-être.</p>
        </div>
      </div>
    </div>
    <div class=" text-center p-4 m-4">
      <h2>Who We Are</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quam tempora fugiat obcaecati,
         perspiciatis dolore voluptatum numquam. Obcaecati quisquam repellendus saepe neque officia animi placeat
          velit natus. Veritatis, velit ut!
      </p>
    </div>
    <div id="process" class="text-center bg-dark text-white p-4">
      <div class="row text-center">
        <h2 class="who mb-4 mt-4 pb-4 pt-4">Our Process</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, asperiores saepe molestiae odio, sequi fugit perspiciatis officiis odit praesentium temporibus quas pariatur officia iusto soluta, ut quam ducimus tempora at.</p>
      </div>
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col">
          <i class="fa-solid fa-chalkboard-user fa-5x m-4"></i>
          <h4 class="who">Decouvrez notre processus</h4>
          <p class="text-center break-word m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae magnam aperiam repudiandae minus alias dolor provident? Blanditiis ab fugit eum culpa autem, ratione dolor omnis, non, esse accusantium deleniti commodi.</p>
          <button><a href="" class="text-white">En Savoir Plus</a></button>
        </div>
        <div class="col">
          <i class="fa-solid fa-person fa-5x m-4"></i>
          <h4 class="who"></h4>
          <p class="text-center break-word m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem excepturi suscipit in vitae, cum qui veniam consectetur doloribus. Mollitia aliquam accusamus id animi temporibus pariatur esse vel et nihil suscipit.</p>
        </div>
      </div>
    </div>
    <div class=" text-center p-4 m-4">
      <i class="fa-solid fa-heart fa-5x m-4" style="color:red;"></i>
      <h2></h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus quam tempora fugiat obcaecati,
         perspiciatis dolore voluptatum numquam. Obcaecati quisquam repellendus saepe neque officia animi placeat
          velit natus. Veritatis, velit ut!
      </p>
    </div>


    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>