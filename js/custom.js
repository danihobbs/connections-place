jQuery(document).ready(function($){

$('.modal-backdrop, #vidModal .close, #vidModal .btn').live('click', function() {
        jQuery('#vidModal iframe').attr('src', jQuery('#vidModal iframe').attr('src'));
});

/* =========================================
================ Drop Down Menu  ==========
=============================================*/

$('ul#main_menu li > .sub-menu').parent().hover(function() {
  var submenu = $(this).children('.sub-menu');
  if ( $(submenu).is(':hidden') ) {
    $(submenu).slideDown(200);
  } else {
    $(submenu).slideUp(200);
  }
});


$('ul#footer_menu li > .sub-menu').parent().hover(function() {
  var submenu = $(this).children('.sub-menu');
  if ( $(submenu).is(':hidden') ) {
    $(submenu).slideDown(200);
  } else {
    $(submenu).slideUp(200);
  }
});


/* =========================================
================ Hamburger menu ==========
=============================================*/
  document.querySelector('.material-design-hamburger__icon').addEventListener(
    'click',
    function() {      
      var child;
      
      document.body.classList.toggle('background--blur');
      this.parentNode.nextElementSibling.classList.toggle('menu--on');

      child = this.childNodes[1].classList;

      if (child.contains('material-design-hamburger__icon--to-arrow')) {
        child.remove('material-design-hamburger__icon--to-arrow');
        child.add('material-design-hamburger__icon--from-arrow');
      } else {
        child.remove('material-design-hamburger__icon--from-arrow');
        child.add('material-design-hamburger__icon--to-arrow');
      }

    });

/* =========================================
================ Sliders ==========
=============================================*/    

      $("#homepage-sliders").owlCarousel({
      items:1,
      autoplay:true,
      autoplayTimeout: 7000,
      loop:true,
      nav:false,
      dots:true,

      
    });

      $("#recent-news-slider").owlCarousel({
      items:3,
      autoplay:false,
      loop:true,
      nav:true,
      margin:10,
      dots:false,
      navText:['<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'],
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:1,
          },
          1000:{
              items:3,
              nav:true,
          }
      }
      
    });
      $('.dropdown a.dropdown-toggle').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
    //start lightbox
    baguetteBox.run('.gallery');
    //init isotope
    var $grid = $('.gallery').imagesLoaded( function() {
      // init Isotope after all images have loaded
      $grid.isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
      });
    });
   var $teamGrid = $('.team-grid').imagesLoaded( function() {
      // init Isotope after all images have loaded
      $teamGrid.isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
      });
    });
});