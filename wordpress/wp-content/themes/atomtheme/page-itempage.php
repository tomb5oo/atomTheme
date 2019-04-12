<?php
/*
    Template Name: Home Page
 */

 // Custom fields



// advanced custom field

$itempage_item_name = get_field('itempage_item_name');
$itempage_item_description = get_field('itempage_item_description');
$itempage_item_mainimage = get_field('itempage_item_mainimage');
$itempage_item_price = get_field('itempage_item_price');
$itempage_item_category = get_field('itempage_item_category');
$itempage_item_brand = get_field('itempage_item_brand');
$itempage_item_keywords = get_field('itempage_item_keywords');



get_header();

?>



<!-- Page Content -->
<div class="container">

  <!-- Product Heading -->
  <h1 class="my-4"><?php echo $name?></h1>

  <!-- Product Display Row -->
  <div class="row">

    <div class="col-md-8">
      <!--Product Image 1-->
      <img class="img-fluid" src="<?php echo $itempage_item_mainimage['url'] ?>" alt="">
    </div>

    <div class="col-md-4">
      <form>
      <h3 class="my-3"><?php //echo $itempage_item_description ?>Product Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <br/>
      <h3 class="my-3">Product Details</h3>
      <ul style="list-style-type: none;">
        <li><span style="font-weight:bold">Price:</span> £0.00</li>
        <li><span style="font-weight:bold">Brand:</span> BrandExample</li>
        <li><span style="font-weight:bold">Category:</span> CategoryExample</li>
        <li><span style="font-weight:bold">Keywords:</span> #keyword1, #keyword2, #keyword3</li>
        <br/>
        <button type="submit" ><a href="http://localhost:8080/atomtheme/wordpress/customcart/" style="color: white">Purchase</a></button>
      </ul>
    </form>
    </div>

  </div>
  <!-- /.row -->

  <h3 class="my-4">More Product Images</h3>

  <div class="row">

  <!-- Other Products Row -->
  <?php
    // $sql = "SELECT * FROM search ORDER BY id DESC";
    // $result = $conn->query($sql);
        //Run while there is data available
        // while($row = $result->fetch_object()){

    $get_cart_items = "SELECT * FROM products ORDER BY id ASC";

    // $get_cart = $conn->query($get_cart_items);
    $get_cart = mysqli_query($conn, $get_cart_items);

    while ($cart_items = mysqli_fetch_array($get_cart)) {

      $id = $cart_items->id;
      $name = $cart_items->name;

      $id = $cart_items['id'];
      $name = $cart_items['name'];
      $description = $cart_items['description'];
      $image = $cart_items['image'];
      $price = $cart_items['price'];
      $category = $cart_items['category'];
      $brand = $cart_items['brand'];

  ?>


    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $image; ?>" alt="">
      </a>
        <p>
          <?php echo $name; ?>
        </p>
      </div>

      <?php } ?>

    </div>
  <!-- /.row -->

  </div>
<!-- /.container -->

<?php get_footer(); ?>
