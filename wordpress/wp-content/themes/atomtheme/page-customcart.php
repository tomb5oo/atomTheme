<?php


get_header();

///////COMMENT OUT OTHER PERSONS CONFIG//////
//include('configTom.php');
include('configAsh.php');


?>
<br />



	<!-- CART FUNCTIONALITY -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
			<h1 class="my-4">Shopping Cart</h1>
			<form action="" method="post" enctype="multipart/form-data">

				<table class="table table-hover" style="box-shadow: 2px 2px 20px #888888;">
					<thead style="background: #343a40; color: white">
						<tr>
							<!-- <th scope="col">ID</th> -->
							<th scope="col" style="text-align:center">Name</th>
							<th scope="col" style="text-align:center">Description</th>
							<th scope="col" style="text-align:center">Image</th>
							<th scope="col" style="text-align:center">Price</th>
							<th scope="col" style="text-align:center">Quantity</th>
							<th scope="col" style="text-align:center">✓</th>
						</tr>
					</thead>

					<tbody>

						<?php
							// $sql = "SELECT * FROM search ORDER BY id DESC";
							// $result = $conn->query($sql);
									//Run while there is data available
									// while($row = $result->fetch_object()){

							$get_products = "SELECT * FROM search ORDER BY id ASC";

							// $get_cart = $conn->query($get_products);
							$get_cart = mysqli_query($conn, $get_products);

							while ($cart_items = mysqli_fetch_array($get_cart)) {

								$id = $cart_items->id;
								$name = $cart_items->name;

								$id = $cart_items['id'];
								$name = $cart_items['name'];
								$description = $cart_items['description'];
								$image = $cart_items['image'];
								$price = $cart_items['price'];
								$category = $cart_items['category'];
								$brand = $cart_items['brand'];

						?>

						<tr>
							<td style="text-align:center"><?php echo $name; ?></td>
							<td style="text-align:center"><?php echo $description; ?></td>
							<td style="text-align:center"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $image; ?>" width="auto" height="100px"></td>
							<td style="text-align:center"><?php echo "£" . $price; ?></td>
							<td style="text-align:center"><input type="text" placeholder="Quantity" size="4" name="qty" style="width:100%"></td>
							<td style="text-align:center"><input type="checkbox" name="remove[]" style="width:10px;" value="<?php echo $cart_items->id;?>"></td>
						</tr>

						<?php
							}
						?>
					</tbody>
				</table>

				<div class="btn-group" role="group" aria-label="Basic example" style="float: right;">

				<button class="btn btn-primary" type="submit">Delete Checked</button>
				<button class="btn btn-primary" type="submit">Continue Shopping</button>
				<a href="checkout.php">
					<button class="btn btn-primary" type="submit">Checkout</button>
				</a>
				</div>
			</form>
		</div>
	</div>
</div>

				<br/><br/><br/><br/>





<?php

get_footer();

?>
