<?php


get_header();
?>




	<!-- CART FUNCTIONALITY -->

			<form action="" method="post" enctype="multipart/form-data">

				<table class="table table-hover">

					<thead style="background: #343a40; color: white">
						<tr>
							<th scope="col">Title</th>
							<th scope="col">Image</th>
							<th scope="col">Remove</th>
							<th scope="col">quantity</th>
							<th scope="col">total price</th>
						</tr>
					</thead>

					<tbody>

							<?php

								$get_products = "SELECT * FROM search";

								$get_cart = mysqli_query($conn, $get_products);

									while ($cart_items = mysqli_fetch_array($get_cart)) {

										$id = $cart_items['$id'];
										$name = $cart_items['$name'];
										$description = $cart_items['description'];
										$image = $cart_items['image'];
										$price = $cart_items['price'];
										$category = $cart_items['category'];
										$brand = $cart_items['brand'];
							?>

							<tr>
								<th scope="row"><?php echo $name;?></th>
								<td align="center"><img src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $image; ?>" width="100" height="100"></td>
								<td align="center"><input type="checkbox" name="remove[]" value="<?php echo $id;?>"></td>
								<td align="center"><input type="text" size="4" name="qty"</td>
								<td align="center"><?php echo "£" . $price; ?></td>
							</tr>

								<?php
										}
								?>
						</tbody>
					</table>

					<div class="btn-group" role="group" aria-label="Basic example" style="float: right;">

					<button class="btn btn-info btn-checkout" type="submit" name="update_cart">Delete checked</button>
					<button class="btn btn-primary btn-continous" type="submit" name="continue">continue shopping</button>
					<button class="btn btn-basic btn-checkout"><a style="text-decoration: none; color: white" href="checkout.php">checkout</a></button>

					</div>
				</form>





<?php

get_footer();
?>
