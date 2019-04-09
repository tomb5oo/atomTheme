<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package urbanViolet
 */

get_header();
?>


<!-- SEARCH BAR FUNCTIONALITY -->

id, name, description, image, price, category, brand, keywords

<?php
if(isset($_GET['search'])){

	$search_query = $_GET['user_query'];

	$get_products = "SELECT * FROM products WHERE keywords LIKE '%$search_query%'";

	$run_get_products = mysqli_query($con, $get_products);

	while($return_products=mysqli_fetch_array($run_get_products)){

		$id = $return_products['$id'];
		$name = $return_products['$name'];
		$description = $return_products['description'];
		$image = $return_products['image'];
		$price = $return_products['price'];
		$category = $return_products['category'];
		$brand = $return_products['brand'];

		echo "
				<div id='single_product'>

					<h3>$name</h3>

					<img src='admin_area/product_images/$image' width='180' height='180' />

					<p><b> £ $price </b></p>

					<a href='details.php?pro_id=$id' style='float:left;'>Details</a>

					<a href='index.php?pro_id=$id'><button style='float:right'>Add to Cart</button></a>

				</div>


		";

	}
	}

	?>

	<!-- CART FUNCTIONALITY -->


<div class="col-md-10" id="content_area">

				<?php cart(); ?>

		<div id="products_box">

			<form action="" method="post" enctype="multipart/form-data">

				<table class="table table-hover">

					<thead style="background: skyblue; color: white">
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

							$total = 0;

							global $con;
							$ip = getIp();

							$sql = "SELECT * FROM carte WHERE ip_add='$ip'";

							$data = mysqli_query($con, $sql);

							while($p_price = mysqli_fetch_array($data)) {

								$pro_id = $p_price['p_id'];

								//Select items from products db, using cart p_id

								$sql1 = "SELECT * FROM products WHERE product_id='$pro_id'";

								$data1 = mysqli_query($con, $sql1);

									while ($pp_price = mysqli_fetch_array($data1)) {

										$product_price = array($pp_price['product_price']);
										$single_price = $pp_price['product_price'];
										$product_title = $pp_price['product_title'];
										$product_image = $pp_price['product_image'];

										$values = array_sum($product_price);

										$total +=$values;
							?>

							<tr>
								<th scope="row"><?php echo $product_title;?></th>
								<td align="center"><img src="admin_area/product_images/<?php echo $product_image;?>" width="100" height="100"></td>
								<td align="center"><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"></td>
								<td align="center"><input type="text" size="4" name="qty"</td>
								<td align="center"><?php echo "£" . $single_price; ?></td>
							</tr>

								<?php
										}
									}
								?>

							<tr style="background: skyblue">
								<td colspan="4" style="text-align: right"><b>Sub Total:</b></td>
								<td align="center"><?php echo "£" . $total;?></td>
							</tr>
						</tbody>
					</table>

					<div class="btn-group" role="group" aria-label="Basic example" style="float: right;">

					<button class="btn btn-info btn-checkout" type="submit" name="update_cart">Delete checked</button>
					<button class="btn btn-primary btn-continous" type="submit" name="continue">continue shopping</button>
					<button class="btn btn-basic btn-checkout"><a style="text-decoration: none; color: white" href="checkout.php">checkout</a></button>

					</div>
				</form>

								<?php

								$ip = getIp();

								if(isset($_POST['update_cart'])) {

									foreach($_POST['remove'] as $remove_id) {

										$sql = "DELETE FROM carte WHERE p_id='$remove_id' AND ip_add='$ip'";

										$data = mysqli_query($con, $sql);

										if($data) {
											echo "<script>window.open('cart.php', '_self')</script";
										}
									}
								}

								if(isset($_POST['continue'])) {

									echo "<script>window.open('index.php', '_self')</script";
								}
								?>
				</div>
			</div>

<?php
get_sidebar();
get_footer();
