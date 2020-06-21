<!DOCTYPE html>
<html>
    <head>
    <?php require_once './resources/templates/head.php'; ?>
    <!-- cart page specific css -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./resources/css/product.css"/>	
        <title>Product,Farmer's expand: #1 perishable farm product marketplace</title>
    </head>

    <body>
<!-- 
        <nav class="navbar">
			<div class="container">
			<div class="navbar-brand"><a href="/" class="brand-wrap">
			<span class="farmer">Farmer's</span><span class="expand">Expand</span>
    </a> </div>
    
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
        </nav> -->
<!-- header section -->
<?php require_once './resources/templates/body-header.php'; ?>

        <!-- Main Content -->

        <div class="productContainer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-5">
              <div class="left">
                <div id="image">
                    <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg"> 
                </div>
                <div class="img-thumbs">
                <img class="active" id="tumbnail" src="https://s.cdpn.io/3/dingo-dog-bones.jpg"> 
                <img id="tumbnail" src="https://s.cdpn.io/3/dingo-dog-bones.jpg"> 
                <img id="tumbnail" src="https://s.cdpn.io/3/dingo-dog-bones.jpg"> 
                <img id="tumbnail" src="https://s.cdpn.io/3/dingo-dog-bones.jpg"> 
                <img id="tumbnail" src="https://s.cdpn.io/3/dingo-dog-bones.jpg"> 
                </div>                                    
            </div><!-- left-->   
              </div>
              <div class="col-sm-12 col-md-7">
              <div class="right"> 
                <div class="productInfo" id ="productInfo">
                    <h3 class="product-name"> <span class="label"> Product name:</span> <span> Dingo-dog-bones 255g </span></h3>
                    <h5 id="stock"><span class="label">Unit Price:</span> <span class="perUnitPrice">$12.99</span> <span class="float-right stock-status">In Stock</span></h5>
                    <hr>
                   
                    <div class="form-row align-items-center">
                        <div class="col col-md-2">
                        <h3>Quantity</h3>
                        </div>
                        <div class="col col-md-3">
                        <div class="input-group">
                              <div class="input-group-prepend minus-btn change-quantity">
                                <div  class=" control input-group-text">
                                  <span class="fa fa-minus"></span>
                                </div>
                              </div>
                              <input class="form-control" type="number" value="1" min="1">
                              <div class="input-group-append plus-btn change-quantity">
                              <div class=" control input-group-text">
                                  <span class="fa fa-plus"></span>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 add-to-cart-btn">
                          <button class="btn btn-block">Add To Cart</button>
                        </div>

                    </div> 
                    <div id="drop">
                        <h3>Additional Information</h3>
                        <p id="demo">
                        Item: Dingo-dog-bones<br>
                        Capacity/Weight: 255g<br>
                        Price per unit: $12.99<br>
                        Brand: Dingo<br>
                        Item type: Processed and Packaged
                        </p>   
                    </div> 
            
                    <div id="drop">
                        <h3>Reviews</h3>
                        <p id="rev">
                            Be the first to review this product
                        </p>   
                    </div>
                </div>
            </div><!-- right -->
              </div>
            </div>
              <!-- Product listing start -->
<div id="related-product-container">
  <h4>Related Products</h4>
  <hr>
<?php include_once './resources/templates/relatedProduct.php'; ?>
</div>
<!-- Product listing end-->
          </div>
        </div>       


      <!-- footer -->
<?php include_once './resources/templates/footer.php' ?>

        <script src="./resources/js/product.js"></script>
        
    </body>
</html>

