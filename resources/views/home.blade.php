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
  <body>
    <video autoplay muted loop id="video-background">
      <source src="{{asset('images/video_2.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
  </video>
    @include('partials.header')
    <div class="content row-cols-1">
      <div class="sec">
        <div id="apropos" class="row section-1 text-white">
          <div class=" col-12 content-1 ">
            <h1 class="text-center welcome">BIENVENUE</h1>
            <p class="pwelcome mb-4 text-center">Recrutement/placement - Mise à disposition de personnel de maison</p>
          </div>            
        </div>
      </div>
      <div class="" style="font-size:48px;">
        <div id="apropos" class="row section-2 text-white justify-content-center align-items-center" style="    background-color: rgba(0,0,0,0.9);
        ">
          <div class="jecherche col text-center" style="height:400px;"> 
            <p class="text-center" style="padding-top:175px;"><a href={{route('client')}} class="text-white"> Je cherche...</a></p>
          </div>
          <div class="jesuis col text-center" style="height:400px;">
            <p class="text-center" style="padding-top:175px;"> <a href={{route('travailleur')}} class="text-white">Je suis...</a></p>
          </div>
        </div>
      </div>
      <div class="sec prestations text-white">
        <div class="text-center container secwwd">
          <div class="row">
            <div class="col">
              <h2 class="wwd m-4">Nos Prestations</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col"></div>
              <div class="col"><p></p>
              </div>
              <div class="col"></div>
          </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3 m-4">
                <div class="col">
                  <div class="col"><i class="fa-solid fa-user fa-2xl"></i></div>
                  <h4 class="hwwd m-4">Recrutement</h2>
                  <p class=" pwwd text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nisi beatae quisquam 
                    deserunt corrupti ut reiciendis nihil, voluptas placeat obcaecati a vitae unde iste doloribus saepe animi 
                    in aspernatur illum.</p>
                </div>
                <div class="col">
                  <div class="col"><i class="fa-solid fa-users fa-2xl"></i></div>
                  <h4 class="hwwd m-4">Coaching</h2>
                  <p class="pwwd text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ullam esse tenetur.
                     Velit mollitia voluptate, obcaecati cumque dolorem quasi inventore magni accusamus voluptatem nulla rerum 
                     quod deleniti fugiat aliquam animi.</p>
                </div>
                <div class="col">
                  <div class="col"><i class="fa-solid fa-receipt fa-2xl"></i></div>
                  <h4 class="hwwd m-4">Home Management</h2>
                  <p class="pwwd text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium libero officia 
                    non saepe illo facilis optio architecto quisquam numquam recusandae fugiat a accusantium natus itaque, 
                    officiis obcaecati amet quos voluptate?</p>
                </div>
              </div>
          </div>
      </div>
      <div class="sec last-sec text-white">
        <div class="container">
        <div class="row">
        <div class="contact2 col-6">
          <h1 class="text-us text-center">Ecrivez-Nous</h1>
          <form class="row g-3" method="post" action="{{route('contact.envoi')}}">
            <div class="col-md-6">
              <label for="inputnom" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="inputname">
            </div>
            <div class="col-md-6">
              <label for="inputprenom" class="form-label">Prenom</label>
              <input type="text" name="prenom" class="form-control" id="inputsurname">
            </div>
            <div class="col-12">
              <label for="inputemail" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="inputmail">
            </div>
            <div class="col-12">
              <label for="inputphone" class="form-label">Telephone</label>
              <input type="tel" class="form-control" id="inputphone" pattern="[0-9]{8,}">
            </div>
            <div class="col-12">
              <label for="inputadress" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="Adresse">
            </div>
  
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
          </form>
        </div>
        <div class="contact2 col-6">
          <h1 class="text-center p-4">POUR PLUS DE RENSEIGNEMENTS, APPELEZ LE:</h1><br>
          <h1 class="text-center p-4"><i class="fa-solid fa-phone fa-xl"></i>(+229) 99 99 99 99</h1>
          <h1 class="text-center p-4"><i class="fa-solid fa-location-dot fa-xl"></i>Nous sommes situes au bla bla bla</h1>
        </div>
      </div>
      </div>
      </div>
    </div>
    
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>