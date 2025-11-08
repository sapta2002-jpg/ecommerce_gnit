<!DOCTYPE html>
<html>

<head>
	<?php include("./inc/head.php") ?>
</head>

<body>
	<!--top-header-->
	<?php include("inc/header.php"); ?>
	<!--bottom-header-->

	<?php
	include("admin/database/db.php");
	$productId = $_GET['id'];
	$select = "SELECT * FROM product WHERE id='$productId'";
	$result = $db->query($select);
	$row = $result->fetch_assoc();

	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";
	// die();
	?>

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Lorem Ipsum</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
					<div class="sngl-top">
						<div class="col-md-5 single-top-left">
							<div class="flexslider">
								<ul class="slides">
									<li data-thumb="images/s1.jpg">
										<img src="images/s1.jpg" />
									</li>
									<li data-thumb="images/s2.jpg">
										<img src="images/s2.jpg" />
									</li>
									<li data-thumb="images/s3.jpg">
										<img src="images/s3.jpg" />
									</li>
									<li data-thumb="images/s4.jpg">
										<img src="images/s4.jpg" />
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

					<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
							$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
							});
						});
					</script>
					<div>
						<div class="col-md-7 single-top-right">
							<div class="details-left-info simpleCart_shelfItem">
								<h3>Accessories Latest</h3>
								<p class="availability">Availability: <span class="color">In stock</span></p>
								<div class="price_single">
									<span class="reducedfrom">$800.00</span>
									<span class="actual item_price">$600.00</span><a href="#">click for offer</a>
								</div>
								<div class="col-md-7 single-top-right">
									<div class="details-left-info simpleCart_shelfItem">
										<h3>Accessories Latest</h3>
										<p class="availability">Availability: <span class="color">In stock</span></p>
										<div class="price_single">
											<span class="reducedfrom" style="text-decoration: none;">
												$<?php echo $row['price']; ?>
											</span>
										</div>
										<h2 class="quick">Quick Overview:</h2>
										<p class="quick_desc"> <?php echo $row['description']; ?> </p>
										<form action="actions/add-to-cart.php" method="post">
											<div class="quantity_box">
												<ul class="product-qty">
													<span>Quantity:</span>
													<select name="quantity">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
													</select>
												</ul>
												<input type="hidden" name="productId" value="<?php echo $row['id']; ?>" />
												<input type="hidden" name="price" value="<?php echo $row['price']; ?>" />
											</div>
											<div class="clearfix"></div>
											<div class="single-but item_add">
												<input type="submit" value="add to cart" name="add_to_cart_btn" />
											</div>
										</form>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--end-single-->
			<!--start-footer-->
			<?php include("inc/footer.php"); ?>