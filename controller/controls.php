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

            <div class='col-lg-4 col-md-6 col-xs-12' style='padding: 1rem;'>
              <img src='../../media/images/stockImage.jpg' height='300rem' >
            </div>";

  	// }
  	// }
  }

  }

  function individualProductCarousel(){

	// if(!isset($_GET['cat'])){
	// 	if(!isset($_GET['brand'])){

	global $con;

	$get_pro = "SELECT * FROM products order by RAND() LIMIT 0,6";

	$run_pro = mysqli_query($con, $get_pro);

	while($row_pro=mysqli_fetch_array($run_pro)){

		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];

		echo "
    <div class='carousel-item'>
      <img class='d-block w-100' src='../../media/images/stockImage.jpg' alt='Second slide' height='auto' width='100%'>
      <div class='carousel-caption d-md-block'></div>
    </div>



		";

	}
	}
// }
//
// }


// ITEM DESCRIPTIONS FOR itempage.php

function individualProductDescription(){

// if(!isset($_GET['cat'])){
// 	if(!isset($_GET['brand'])){

global $con;

$get_pro = "SELECT * FROM products";

$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

  $pro_id = $row_pro['product_id'];
  $pro_cat = $row_pro['product_cat'];
  $pro_brand = $row_pro['product_brand'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];

  echo "
        <div class='col-lg-6 col-md-4 col-sm-12'>
          <div class='col-12' style='margin: auto 0'>
            <div class='row'>
              <h2>$pro_title</h2>
            </div>
            <div class='row'>
              <h3>$pro_brand</h3>
            </div>
            <div class='row'>
              <p>Description - orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class='row'>
              <p style='margin: auto 10px auto 0;font-weight:bold;'>Price: £0.00</p>
              <div id='input_div' style='margin: auto 10px auto 0'>
                  <button class='btn btn-outline-light text-dark' type='button' id='moins' onclick='minus()'>-</button>
                  <input type='text' size='5' value='1' id='count' style='text-align:center;height:36px;'>
                  <button class='btn btn-outline-light text-dark' type='button' id='plus' onclick='plus()'>+</button>
              </div>
              <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Add to basket</button>
            </div>
          </div>
        </div>



  ";

}
}
// }
//
// }






?>
