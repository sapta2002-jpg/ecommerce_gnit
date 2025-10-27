<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<a href="index.php"><img src="images/logo-4.png" alt="" /></a>
			</div>
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
					<a href="checkout.php">
						<h3>
							<div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
							</div>
							<img src="images/cart-1.png" alt="" />
					</a>
					<p><a href="./cart.php" class="simpleCart_empty">Empty Cart</a></p>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
<!-- <?php session_start(); ?> -->
<?php if (isset($_SESSION['user_name'])): ?>
	<p>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']);  ?> | <a href="logout.php">Logout</a></p>
<?php else: ?>
	<p><a href="account.php">Login / Register</a></p>
<?php endif; ?>

<!--bottom-header-->
<div class="header-bottom">
	<div class="container">
		<div class="top-nav">
			<ul class="memenu skyblue">
				<li class="active"><a href="index.php">Home</a></li>
				<li class="grid"><a href="#">Men</a>
					<div class="mepanel">
						<div class="row">
							<div class="col1 me-one">
								<h4>Shop</h4>
								<ul>
									<li><a href="products.php">New Arrivals</a></li>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">login</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">My Shopping Bag</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Style Videos</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.php">Levis</a></li>
									<li><a href="products.php">Persol</a></li>
									<li><a href="products.php">Nike</a></li>
									<li><a href="products.php">Edwin</a></li>
									<li><a href="products.php">New Balance</a></li>
									<li><a href="products.php">Jack & Jones</a></li>
									<li><a href="products.php">Paul Smith</a></li>
									<li><a href="products.php">Ray-Ban</a></li>
									<li><a href="products.php">Wood Wood</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li class="grid"><a href="#">Women</a>
					<div class="mepanel">
						<div class="row">
							<div class="col1 me-one">
								<h4>Shop</h4>
								<ul>
									<li><a href="products.php">New Arrivals</a></li>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">login</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">My Shopping Bag</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Style Videos</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.php">Levis</a></li>
									<li><a href="products.php">Persol</a></li>
									<li><a href="products.php">Nike</a></li>
									<li><a href="products.php">Edwin</a></li>
									<li><a href="products.php">New Balance</a></li>
									<li><a href="products.php">Jack & Jones</a></li>
									<li><a href="products.php">Paul Smith</a></li>
									<li><a href="products.php">Ray-Ban</a></li>
									<li><a href="products.php">Wood Wood</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li class="grid"><a href="#">Kids</a>
					<div class="mepanel">
						<div class="row">
							<div class="col1 me-one">
								<h4>Shop</h4>
								<ul>
									<li><a href="products.php">New Arrivals</a></li>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">login</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">My Shopping Bag</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Style Videos</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.php">Levis</a></li>
									<li><a href="products.php">Persol</a></li>
									<li><a href="products.php">Nike</a></li>
									<li><a href="products.php">Edwin</a></li>
									<li><a href="products.php">New Balance</a></li>
									<li><a href="products.php">Jack & Jones</a></li>
									<li><a href="products.php">Paul Smith</a></li>
									<li><a href="products.php">Ray-Ban</a></li>
									<li><a href="products.php">Wood Wood</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li class="grid"><a href="#">Sports</a>
					<div class="mepanel">
						<div class="row">
							<div class="col1 me-one">
								<h4>Shop</h4>
								<ul>
									<li><a href="products.php">New Arrivals</a></li>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">login</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">My Shopping Bag</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Style Videos</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.php">Levis</a></li>
									<li><a href="products.php">Persol</a></li>
									<li><a href="products.php">Nike</a></li>
									<li><a href="products.php">Edwin</a></li>
									<li><a href="products.php">New Balance</a></li>
									<li><a href="products.php">Jack & Jones</a></li>
									<li><a href="products.php">Paul Smith</a></li>
									<li><a href="products.php">Ray-Ban</a></li>
									<li><a href="products.php">Wood Wood</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li class="grid"><a href="#">Brands</a>
					<div class="mepanel">
						<div class="row">
							<div class="col1 me-one">
								<h4>Shop</h4>
								<ul>
									<li><a href="products.php">New Arrivals</a></li>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">login</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">My Shopping Bag</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.php">Men</a></li>
									<li><a href="products.php">Women</a></li>
									<li><a href="products.php">Brands</a></li>
									<li><a href="products.php">Kids</a></li>
									<li><a href="products.php">Accessories</a></li>
									<li><a href="products.php">Style Videos</a></li>
								</ul>
							</div>
							<div class="col1 me-one">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.php">Levis</a></li>
									<li><a href="products.php">Persol</a></li>
									<li><a href="products.php">Nike</a></li>
									<li><a href="products.php">Edwin</a></li>
									<li><a href="products.php">New Balance</a></li>
									<li><a href="products.php">Jack & Jones</a></li>
									<li><a href="products.php">Paul Smith</a></li>
									<li><a href="products.php">Ray-Ban</a></li>
									<li><a href="products.php">Wood Wood</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>