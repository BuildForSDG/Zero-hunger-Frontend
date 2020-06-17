<!DOCTYPE html>
<html>
	<head>
  <?php require_once './resources/templates/head.php'; ?>
    <title>Farmers Expand</title>
<!-- <link href="./vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
		 <!-- checkout page specific css -->
     <link rel="stylesheet" type="text/css" href="./resources/css/checkout.css"/>		
	<title>Checkout, Thanks for Shopping on Farmer's expand: #1 perishable farm product marketplace</title>
    </head>
	</head>

	<body>

		<nav class="navbar">
			<div class="container">
      <div class="navbar-brand"><a href="/" class="brand-wrap">
			<span class="farmer">Farmer's</span><span class="expand">Expand</span>
		</a> <!-- brand-wrap.// --></div>
        
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
    
    <div class="container checkout">

<div class="row">
<div class="col-md-5 col-sm-12">
  <div class="bigcart"></div>
  <h1><a href="#" class="brand-wrap">
			<span class="farmer">Farmer's</span><span class="expand">Expand</span>
		</a> <!-- brand-wrap.// --> Checkout</h1>
  <p>
    We Hope To see you again soon. 
  </p>
</div>

<div class="col-md-7 col-sm-12 text-left">
<div id="checkout-step" class="checkout-step">
  <?php require_once './resources/templates/checkout-shipping-delivery-step.php'?>
</div>
</div>

</div>
</div>
		
          <!-- footer -->
<?php include_once './resources/templates/footer.php' ?>
<!-- <script src="./vendor/js/bootstrap.min.js" type="text/javascript"></script> -->
<!-- checkout page specific custom javascript -->
<script type="text/javascript" src="./resources/js/checkout.js"></script>

	</body>
</html>