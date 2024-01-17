const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  function grisercard()
  {
    var cartegrisee = false;

    var macard = document.getElementById('macard');
    macard.classList.add('grayed');

    if (!cartegrisee){
      macard.classList.add('grayed');
      cartegrisee = true;
    }
  }