<!DOCTYPE HTML>
<html lang="en">
<head>
  <?php require_once './resources/templates/head.php'; ?>
	<title>Farmer's expand: #1 perishable farm product marketplace</title>
<!-- custom style -->

<link href="./resources/css/quick-view.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<!-- header section -->
<?php require_once './resources/templates/body-header.php'; ?>
    <section class="section-content padding-y bg">

<!-- Product listing start -->
<div id="product-listing-container">
<?php include_once './resources/templates/product-listing.php'; ?>
</div>
<!-- Product listing end-->

<!-- quick view section start -->
<div id="quckView-container"></div>
<!-- quick view section send -->

<!-- footer -->
<?php include_once './resources/templates/footer.php' ?>
</section>
<!-- home page specific custom javascript -->
<script src="resources/js/quickVIew.js" type="text/javascript"></script>
    </body>
</html>