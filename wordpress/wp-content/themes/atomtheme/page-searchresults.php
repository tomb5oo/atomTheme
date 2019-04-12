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

 $image_1     = get_field('image_1');
 $image_2     = get_field('image_2');
 $image_3     = get_field('image_3');
 $image_4     = get_field('image_4');
 $image_5     = get_field('image_5');
 $image_6     = get_field('image_6');
 $image_7     = get_field('image_7');
 $image_8     = get_field('image_8');

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
				<div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_1['url']; ?>"></div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_2['url']; ?>"></div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_3['url']; ?>"></div>

			  <div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_4['url']; ?>"></a></div>
			  <div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_5['url']; ?>"></div>

			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_6['url']; ?>"></div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_7['url']; ?>"></div>
			  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><a href="http://localhost:8080/atomtheme/wordpress/itempage/"><img src="<?php echo $image_8['url']; ?>"></div>
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
