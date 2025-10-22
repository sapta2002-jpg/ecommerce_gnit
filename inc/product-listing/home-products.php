<?php
$query = "SELECT * FROM product";
$result = $db->query($query);
// echo "<pre>";
// print_r($result->fetch_all());
// echo "</pre>";
$products = $result->fetch_all(MYSQLI_ASSOC);

?>

<div class="shoes">
	<div class="container">
		<div class="product-one">

			<?php
			for ($i = 0; $i < count($products); $i++) {
				// echo "<pre>";
				// print_r($products[$i]);
				// echo "</pre>";
			?>
				<div class="col-md-3 product-left">
					<div class="p-one simpleCart_shelfItem">
						<a href="single.php">
							<img src="admin/uploads/<?php echo $products[$i]['image']; ?>" alt="" style="" />
							<div class="mask">
								<span>Quick View</span>
							</div>
						</a>
						<h4>
							<?php echo $products[$i]['name']; ?>
						</h4>
						<p>
							<a class="item_add" href="#">
								<i></i>
								<span class=" item_price">$ <?php echo $products[$i]['price']; ?> </span>
							</a>
						</p>

					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>