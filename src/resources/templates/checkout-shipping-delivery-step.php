<form class="animated fadeIn">
  <div class="delivery-details card">
    <h3 class=" card-header">Delivery Address</h3>
    <div class="card-body">
      <div class="new-address text-right py-2 my-2">
        <span class="btn btn-sm btn-info" onclick="addDeliveryAddress()">Add Delivery Address</span>
      </div>
      <div class="delivery-address-list">
        <ul class="Delivery-addresses">
    <li class="delivery-address form-row align-items-center py-1">
      <div class="col-2 text-center d-flex align-items-center justify-content-center">
      <input id="da-1" class="form-control col-2" type="radio" name="delivery-address" value="1">
      </div>
      <label class="col-10" for="da-1">No 4, Akinlalu, moro, ife-north, Ile-ife, Lagos State</label>
        
    </li>

    <li class="delivery-address form-row align-items-center py-1">
      <div class="col-2 text-center d-flex align-items-center justify-content-center">
      <input id="da-2" class="form-control col-2" type="radio" name="delivery-address" value="1">
      </div>
      <label class="col-10" for="da-2">No 4, Akinlalu, moro, ife-north, Ile-ife, Lagos State</label>
        
    </li>
</ul>
      </div>
    </div>
  </div>

   <div class="shipping-detail card mt-2">
    <h3 class=" card-header">Shipping</h3>
    <div class="card-body">
 
	<div class="form-row">
  <div class="form-group col-md-6">
		  <label>Shipping Agent</label>
		  <select id="inputState" class="form-control custom-select">
		    <option> Choose...</option>
		      <option>UPS green</option>
		      <option>Ade n Shade Pick n Drop</option>
		      <option >DHL Green Express</option>
		  </select>
    </div> <!-- form-group end.// -->
    
    <div class="form-group col-md-6">
		  <label>Method</label>
		  <select id="ship-method" class="form-control custom-select">
		    <option>Delivery</option>
		      <option>Pick Up</option>
		  </select>
    </div> <!-- form-group end.// -->
	
  </div> <!-- form-row.// -->
  <div class="form-row">
    <div class="col-12 text-right fa-2x p-1">Shipping Cost: <span class="cost text-info">$50.00</span></div>
  </div>                                      
    </div>
  
  </div>
 
  <ul class="Payment">

  <li class="totals">
      <span class="order"> <a href="#payment" class="text-center" onclick="payMentStep()">Continue</a></span>
    </li>
  </ul>
  </form>

  <div id="Add-new-delivery-Address">
  </div>