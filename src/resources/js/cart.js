/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});

$('.change-quantity').click( function() {
  changeQuantity(this);
});

/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children().children('.product-line-price-value').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  // var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax;;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    // $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children().children('.product-line-price-value').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}

/* Add or minus quantity of prosuct in cat */

function changeQuantity(chng_btn){

  let quantity=$(chng_btn).parent().children('input')
  let Oldval= Number(quantity.val());

  if(chng_btn.classList.contains('minus-btn')  && (Oldval-1)>0 ){
    
      quantity.val(Oldval-1)
      updateQuantity(quantity)
    } 
  
  if(chng_btn.classList.contains('plus-btn')){
    
      quantity.val(Oldval+1)
      updateQuantity(quantity)
    }


  
}
