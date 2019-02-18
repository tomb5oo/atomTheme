<?php



// DISPLAY PRODUCT IMAGES - HOME PAGE

function productImage(){

	if (!isset($_GET['cat'])) {
		if (!isset($_GET['brand'])) {

	global $con;

	$get_pro = "SELECT * FROM products order by RAND() LIMIT 0,6";
	$run_pro = mysqli_query($con, $get_pro);

  while ($row_pro=mysqli_fetch_array($run_pro)) {

		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];

  		echo
          "
            <tr>
      				<td data-th="Product">
      					<div class="row">
      						<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
      						<div class="col-sm-10">
      							<h4 class="nomargin">Product 1</h4>
      							<p>Atom theme product description goes here...Atom theme product description goes here...Atom theme product description goes here </p>
      						</div>
      					</div>
      				</td>
      				<td data-th="Price">$1.99</td>
      				<td data-th="Quantity">
      					<input type="number" class="form-control text-center" value="1">
      				</td>
      				<td data-th="Subtotal" class="text-center">1.99</td>
      				<td class="actions" data-th="">
      					<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
      					<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
      				</td>
      			</tr>;
        	}
        }
      }
    }



  // DISPLAY PRODUCT WITH ADD TO CART BUTTON

  function getCatPro() {
    if(isset($_GET['cat'])) {

        $cat_id = $_GET['cat'];

            global $con;

            $get_cat_pro = "SELECT * FROM products WHERE product_cat='$cat_id'";
            $run_cat_pro = mysqli_query($con, $get_cat_pro);
            $count_cats = mysqli_num_rows($run_cat_pro);

            if ($count_cats==0) {

                echo "<h2 style='padding:50px;'> There is no product in this category</h2>";
            }

            while ($row_cat_pro = mysqli_fetch_array($run_cat_pro)) {

                $pro_id = $row_cat_pro['product_id'];
                $pro_cat = $row_cat_pro['product_cat'];
                $pro_brand = $row_cat_pro['product_brand'];
                $pro_title = $row_cat_pro['product_title'];
                $pro_price = $row_cat_pro['product_price'];
                $pro_image = $row_cat_pro['product_image'];

                  echo "
                    <div id='single_product'>
                      <h3>$pro_title</h3>
                      <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                      <p><b> £$pro_price <b></p>
                      <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                      <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to cart</button></a>
                    </div>";
                  }
                }
              }

?>
