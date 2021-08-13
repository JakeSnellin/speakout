function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnMore = document.getElementById("btn-more");
  var btnLess = document.getElementById("btn-less");

  if(dots.style.display === "none")
  {
    dots.style.display = "inline";
    btnMore.style.display = "inline";
    btnLess.style.display = "none";
    moreText.style.display = "none";

  }
  else
  {
    dots.style.display = "none";
    btnMore.style.display = "none"
    btnLess.style.display = "block";
    btnLess.style.margin = "0 auto";
    moreText.style.display = "inline";
  }
}

jQuery (function($){

  $('.close-message-btn').click(function(){
    $('.woocommerce-message').fadeToggle();
  });
});


jQuery (function($){

  $('.single_add_to_cart_button').click(function(){
    $('.woocommerce-message').fadeIn();
  });
});



jQuery(document).ready(function($){   
          
  $('form.cart').on( 'click', 'button.plus, button.minus', function() {

  // Get current quantity values
  var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
  var val   = parseFloat(qty.val());
  var max = parseFloat(qty.attr( 'max' ));
  var min = parseFloat(qty.attr( 'min' ));
  var step = parseFloat(qty.attr( 'step' ));

  // Change the value if plus or minus
  if ( $( this ).is( '.plus' ) ) {
     if ( max && ( max <= val ) ) {
        qty.val( max );
     } 
  else {
     qty.val( val + step );
       }
  } 
  else {
     if ( min && ( min >= val ) ) {
        qty.val( min );
     } 
     else if ( val > 1 ) {
        qty.val( val - step );
     }
  }
   
});

});


