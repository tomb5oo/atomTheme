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

<div class="col-md-10" id="">
	<div class="row">
		<div id="">
				<?php
				if(isset($_GET['search'])){

					$search_query = $_GET['user_query'];

					$get_products = "SELECT * FROM search WHERE keywords LIKE '%$search_query%'";

					$run_get_products = mysqli_query($conn, $get_products);

					while($return_products=mysqli_fetch_array($run_get_products)){

						$id = $return_products['$id'];
						$name = $return_products['$name'];
						$description = $return_products['description'];
						$image = $return_products['image'];
						$price = $return_products['price'];
						$category = $return_products['category'];
						$brand = $return_products['brand'];

						echo "
								<div>
									<h3>$name</h3>
									<img src='$image'</img>
									<p><b> £ $price </b></p>
									<a href='details.php?pro_id=$id' style='float:left;'>Details</a>
									<a href='index.php?pro_id=$id'><button style='float:right'>Add to Cart</button></a>
								</div>
								";
							}
						}
					?>
		  </div>
	 </div>
</div>


<?php

get_sidebar();
get_footer();
?>
