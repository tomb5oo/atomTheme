<?php



// DISPLAY PRODUCT IMAGES - HOME PAGE

// function (){
//
// 	if (!isset($_GET['cat'])) {
// 		if (!isset($_GET['brand'])) {
//
// 	global $con;
//
// 	$get_pro = "SELECT * FROM products order by RAND() LIMIT 0,6";
// 	$run_pro = mysqli_query($con, $get_pro);
//
//   while ($row_pro=mysqli_fetch_array($run_pro)) {
//
// 		$pro_id = $row_pro['product_id'];
// 		$pro_cat = $row_pro['product_cat'];
// 		$pro_brand = $row_pro['product_brand'];
// 		$pro_title = $row_pro['product_title'];
// 		$pro_price = $row_pro['product_price'];
// 		$pro_image = $row_pro['product_image'];
//
//   		echo
//           "
//             <tr>
//       				<td data-th="Product">
//       					<div class="row">
//       						<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
//       						<div class="col-sm-10">
//       							<h4 class="nomargin">Product 1</h4>
//       							<p>Atom theme product description goes here...Atom theme product description goes here...Atom theme product description goes here </p>
//       						</div>
//       					</div>
//       				</td>
//       				<td data-th="Price">$1.99</td>
//       				<td data-th="Quantity">
//       					<input type="number" class="form-control text-center" value="1">
//       				</td>
//       				<td data-th="Subtotal" class="text-center">1.99</td>
//       				<td class="actions" data-th="">
//       					<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
//       					<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
//       				</td>
//       			</tr>;
//         	}
//         }
//       }
//     }



  // DISPLAY ALL PRODUCTS

  function allProducts() {

  	// if(!isset($_GET['cat'])){
  	// 	if(!isset($_GET['brand'])){

  	global $con;

  	$get_productImage = "SELECT * FROM products";

  	$run_productImage = mysqli_query($con, $get_productImage);

  	while($sql_productImage=mysqli_fetch_array($run_productImage)){

  		$pro_id = $sql_productImage['product_id'];
  		$pro_cat = $sql_productImage['product_cat'];
  		$pro_brand = $sql_productImage['product_brand'];
  		$pro_title = $sql_productImage['product_title'];
  		$pro_price = $sql_productImage['product_price'];
  		$pro_image = $sql_productImage['product_image'];

  		echo "




  				<div class='col-md-3' style='border: 1px solid black; padding: 15px; margin: 0 0 15 30; box-shadow: 6px 6px 2px 1px rgba(0, 0, 255, .1);'>



  					<img src='../../media/images/trees.jpeg' width='180' height='180' >

  					<h3>$pro_title</h3>

  					<p><b> Price: £$pro_price </b></p>

  					<a href='details.php?pro_id=$pro_id'>Details</a>

  					<a href='index.php?add_cart=$pro_id'><button type='button' class='btn-sm btn-info'>Add to Carte</button></a>

  				</div>


  		";

  	// }
  	// }
  }

  }

?>
