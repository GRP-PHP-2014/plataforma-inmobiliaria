
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

//UN DESTACADO
// <div class="col-md-12" style="margin-top:3em">
//   <div class="featurette2">
//     <img class="featurette-image img-circle pull-right" src="/plataforma-inmobiliaria/images/placehold/512.gif">
//     <h2 class="featurette-heading">Title. <span class="text-muted">Resume.</span></h2>
//     <hr class="featurette-divider">
//     <p class="lead">Description.</p>
//   </div>
// </div>

// UN RESULTADO DE BUSQUEDA
// <div class="col-sm-6"> 
//   <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
//     <div class="media">
//       <a class="pull-left" href="#" target="_parent">
//       <img alt="image" class="img-responsive" src="/plataforma-inmobiliaria/images/prop/prop1.jpg"></a>
//       <div class="clearfix visible-sm"></div>
//       <div class="media-body fnt-smaller">
//         <a href="#" target="_parent"></a>
//         <h4 class="media-heading">
//           <a href="#" target="_parent">$ 275.000 <small class="pull-right">Garzon 6215</small></a>
//         </h4>
//         <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
//           <li>4,820 mts2</li>
//           <li style="list-style: none">|</li>
//           <li>3 Habitaciones</li>
//           <li style="list-style: none">|</li>
//           <li>1 Baños</li>
//         </ul>
//         <p class="hidden-xs">Muy buena propiedad, sólida construcción, ubicada a 1 cuadra de avenida garzón, consta de 2 a 3 dormitorios, living comedor, cocina con placares aéreos y bajo mesada, baño completo, jardín,patio techado con parrillero,opción cochera, fondo y garaje con acceso por calle andrés de planchada para 2 autos con mesada. Excelente locomoción y servicios en la zona.</p>
//         <span class="fnt-smaller fnt-lighter fnt-arial">Codigo de referencia HQJ25</span>
//       </div>
//     </div>
//   </div>
// </div>
