
jQuery(document).ready(function($) {

$( document.body ).click(function() {
  if ( $( "#DivB" ).is( ":visible" ) ) {
   $( "#DivB" ).slideUp(700).then(
   $("body").fadeOut(2000);).then(
   $("body").fadeIn(2000);)
  } else {
    
    $( "#DivB" ).slideDown( "slow" );
    
  }
});
});
