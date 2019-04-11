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

				<?php
				// if(isset($_GET['search1'])){
				//
				// 	$search_query = $_GET['user_query'];
				//
				// 	$get_products = "SELECT * FROM search WHERE keywords LIKE '%$search_query%'";
				//
				// 	$run_get_products = mysqli_query($conn, $get_products);
				//
				// 	while($return_products=mysqli_fetch_array($run_get_products)){
				//
				// 		$id = $return_products['id'];
				// 		$name = $return_products['name'];
				// 		$description = $return_products['description'];
				// 		$image = $return_products['image'];
				// 		$price = $return_products['price'];
				// 		$category = $return_products['category'];
				// 		$brand = $return_products['brand'];
				//
				// 		echo "
				// 				<div>
				// 					<h3>$name</h3>
				// 					<img src='$image'</img>
				// 					<p><b> £ $price </b></p>
				// 					<a href='details.php?pro_id=$id' style='float:left;'>Details</a>
				// 					<a href='index.php?pro_id=$id'><button style='float:right'>Add to Cart</button></a>
				// 				</div>
				// 				";
				// 			}
				// 		}
					?>


<!-- SEARCH BAR FUNCTIONALITY -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
			<div class="row" style="padding:20px;">
			  <!-- below can be replaced by 'php allProducts function -->
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_1['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/lake1.jpg">Item Name</div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_2['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/atom1.jpeg">Item Name</div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_3['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/space1.jpeg">Item Name</div>

			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_1['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/space1.jpeg">Item Name</div>
				<div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_2['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/lake1.jpg">Item Name</div>
				<div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_3['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/atom1.jpeg">Item Name</div>

			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_1['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/atom1.jpeg">Item Name</div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_2['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/space1.jpeg">Item Name</div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php //echo $image_3['url']; ?>http://localhost:8080/atomtheme/wordpress/wp-content/themes/atomtheme/assets/img/lake1.jpg">Item Name</div>
			</div>

				<?php
				// if(isset($_GET['search'])){
				//
				// 	$search_query = $_GET['user_query'];
				//
				// 	$get_products = "SELECT * FROM search WHERE keywords LIKE '%$search_query%'";
				//
				// 	$run_get_products = mysqli_query($conn, $get_products);
				//
				// 	while($return_products = mysqli_fetch_array($run_get_products)){
				//
				// 		$id = $return_products['$id'];
				// 		$name = $return_products['$name'];
				// 		$description = $return_products['description'];
				// 		$image = $return_products['image'];
				// 		$price = $return_products['price'];
				// 		$category = $return_products['category'];
				// 		$brand = $return_products['brand'];
				// 		$keywords = $return_products['keywords'];
				//
				// 		echo "
				// 				<div>
				// 					<h3>$name</h3>
				// 					<img src='$image'</img>
				// 					<p><b> £ $price </b></p>
				// 					<a href='details.php?pro_id=$id' style='float:left;'>Details</a>
				// 					<a href='index.php?pro_id=$id'><button style='float:right'>Add to Cart</button></a>
				// 				</div>
				// 				";
				// 			}
				// 		}
					?>

		  </div>
	 </div>
</div>

<br />
<br />
<br />
<br />

<?php

get_footer();
?>
