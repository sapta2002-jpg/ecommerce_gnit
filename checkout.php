<!DOCTYPE html>
<html>

<?php include("inc/head.php"); ?>

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
					<li class="active">Checkout</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">

			<div class="row">
				<div class="col-12">
					<form action="./actions/place-order.php" method="post">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" id="country" name="country_input" placeholder="Enter country" required>
						</div>
						<div class="form-group">
							<label for="state">State</label>
							<input type="text" class="form-control" id="state" name="state_input" placeholder="Enter state" required>
						</div>
						<div class="form-group">
							<label for="city">City</label>
							<input type="text" class="form-control" id="city" name="city_input" placeholder="Enter city" required>
						</div>
						<div class="form-group">
							<label for="pincode">Pincode</label>
							<input type="text" class="form-control" id="pincode" name="pincode_input" placeholder="Enter pincode" required>
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary btn-lg">Order Now</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
	<!--end-ckeckout-->

	<!--start-footer-->
	<?php include("inc/footer.php"); ?>
</body>

</html>