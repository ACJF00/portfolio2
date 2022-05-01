let menu = document.querySelector("#menu-bars");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}


window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


//// BUTTON PHONE

let button = document.querySelector(".primary-button");
let item = document.querySelector(".primary-button .round");


button.addEventListener("mouseenter", function(event) {
  this.classList.add(("animate"))

  let buttonX = event.offsetX;
  let buttonY = event.offsetY;


  if (buttonY < 24) {
    item.style.top = 0 + "px";
  } else if (buttonY > 30) {
    item.style.top = 48 + "px";
  }

  item.style.left = buttonX + "px";
  item.style.width = "1px";
  item.style.height = "1px";
});

button.addEventListener("mouseleave", function() {
  this.classList.remove("animate");

  let buttonX = event.offsetX;
  let buttonY = event.offsetY;


  if (buttonY < 24) {
    item.style.top = 0 + "px";
  } else if (buttonY > 30) {
    item.style.top = 48 + "px";
  }
  item.style.left = buttonX + "px";
});


// // Color active ancre, navbar

// window.couleur = function(){

//     // tu recuperes les elements a colorier
//     var colorMoi = document.getElementById('a-propos-nav');
//     var colorCompetences = document.getElementById('competences-nav');
//     var colorPortfolio = document.getElementById('portfolio-nav');
//     // var colorContact = document.getElementById('contact-nav')

//     console.log(colorCompetences)
    
//     // tu recuperes la hauteur de chaque div, par rapport au top du DOC
//     var moiDiv = document.getElementById('a-propos');
//     var competencesDiv = document.getElementById('competences');
//     var portfolioDiv = document.getElementById('portfolio');
//     // var contactDiv = document.getElementById('contact');
    
//     // tu recuperes la somme hauteur+offsetTop
//     var moiCal = moiDiv.offsetHeight+moiDiv.offsetTop;
//     var competencesCal = competencesDiv.offsetHeight+competencesDiv.offsetTop;
//     var portfolioCal = portfolioDiv.offsetHeight+portfolioDiv.offsetTop;
//     // var contactCal = contactDiv.offsetHeight+contactDiv.offsetTop;
    
//     var pos = window.scrollY; // tu recuperes ta position verticale au scroll
    
    
//     if(pos<moiCal){   
//        colorMoi.style.background = 'red';
//     } else
//             colorMoi.style.background = 'rgba(0,0,0,.15)';
    
    
//     if (pos>moiCal && pos<competencesCal){
//      colorCompetences.style.background = 'red';
//     } else
//             colorCompetences.style.background = 'rgba(0,0,0,.15)';
    
    
//     if (pos>competencesCal && pos<portfolioCal){
//      colorPortfolio.style.background = 'red';
//     } else
//             colorPortfolio.style.background = 'rgba(0,0,0,.15)';
    
//     } // fin fonction couleur
    
//     // tu fais tourner ta fonction au scroll
//      window.addEventListener("scroll" , couleur);