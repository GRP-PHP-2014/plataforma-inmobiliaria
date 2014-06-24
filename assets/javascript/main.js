
$( document ).ready(function() {
    console.log( "ready!" );
/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})
/* smooth scrolling for scroll down */
$('.scroll-down').click(function(){
  $('body,html').animate({scrollTop:$(window).scrollTop()+800},1000);
})

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#navbar' })
});

//En destacados debo agregar estos elementos dinamicamente
// <div class="col-md-12" style="margin-top:3em">
//   <div class="featurette2">
//     <img class="featurette-image img-circle pull-right" src="/plataforma-inmobiliaria/images/placehold/512.gif">
//     <h2 class="featurette-heading">Title. <span class="text-muted">Resume.</span></h2>
//     <hr class="featurette-divider">
//     <p class="lead">Description.</p>
//   </div>
// </div>
