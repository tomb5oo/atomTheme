

<?php
	include('header.php');
	include('nav.php');
?>

	<div class="row">

	<div id="products_box">

    <?php
// SEARCH function


if(isset($_GET['search'])){

  global $con;

	$search_query = $_GET['user_query'];

	$get_products = "SELECT * FROM products WHERE product_keywords LIKE '%$search_query%'";

	$run_products = mysqli_query($con, $get_products);

	while($row_products = mysqli_fetch_array($run_products)){

		$pro_id = $row_products['product_id'];
		$pro_cat = $row_products['product_cat'];
		$pro_brand = $row_products['product_brand'];
		$pro_title = $row_products['product_title'];
		$pro_price = $row_products['product_price'];
		$pro_image = $row_products['product_image'];

		echo "
				<div id='single_product'>

					<h3>$pro_title</h3>

					<img src='admin_area/product_images/$pro_image' width='180' height='180' />

					<p><b> $ $pro_price </b></p>

					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>

					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>

				</div>


		";

	}
	}

  ?>

</div>

    </div>
  </div><!-- bootstrap row-->
</div><!--bootstrap content area-->
