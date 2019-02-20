

			<div class="row">

	<div id="products_box">

    <?php
// SEARCH function


if(isset($_GET['search'])){

  global $con;

	$search_query = $_GET['user_query'];

	$get_pro = "SELECT * FROM products WHERE product_keywords LIKE '%$search_query%'";

	$run_pro = mysqli_query($con, $get_pro);

	while($row_pro=mysqli_fetch_array($run_pro)){

		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];

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
