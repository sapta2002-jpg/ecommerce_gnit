<?php
include("admin/database/db.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start menu -->
	<script src="js/simpleCart.min.js"> </script>
	<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/memenu.js"></script>
	<script>
		$(document).ready(function() {
			$(".memenu").memenu();
		});
	</script>
</head>

<body>
	<!--top-header-->
	<?php include("inc/header.php"); ?>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">New Products</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-product-->
	<div class="product">
		<div class="container">
			<div class="product-main">
				<div class="col-md-9 p-left">
					<div class="product-one">

						<?php
						$res = $db->query("SELECT product.name as pname , product.image , product.price , product.description, product.category_id ,category.name as cname , category.id FROM product INNER JOIN category ON category.id = product.category_id ");
						while ($row = $res->fetch_assoc()) { ?>

							<div class="col-md-4 product-left single-left">
								<div class="p-one simpleCart_shelfItem">
									<a href="single.php?id=<?php echo $row['id']; ?>">
										<img src="admin/uploads/<?php echo $row['image']; ?>" alt="" style="" />
										<div class="mask mask1">
											<span>Quick View</span>
										</div>
									</a>
									<h4> <?php echo $row['pname']; ?> </h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$<?php echo $row['price']; ?> </span></a></p>
								</div>
							</div>

						<?php }	?>

						<div class="clearfix"> </div>
					</div>

				</div>
				<div class="col-md-3 p-right single-right">
					<h3>Categories</h3>
					<ul class="product-categories">

						<?php
						$res = 	$db->query("SELECT * FROM category");
						while ($row = $res->fetch_assoc()) { ?>

							<li><a href="#"> <?php echo $row['name']; ?> </a></li>

						<?php } ?>

					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-product-->
	<!--start-footer-->
	<?php include("inc/footer.php"); ?>