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
  <h1 class="my-4"><?php the_field('itempage_item_name') ?></h1>

  <!-- Product Display Row -->
  <div class="row">

    <div class="col-md-8">
      <!--Product Image 1-->
      <img class="img-fluid" src="<?php //echo $itempage_item_mainimage ?>http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3"><?php //echo $itempage_item_description ?>Product Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <br/>
      <h3 class="my-3">Product Details</h3>
      <ul style="list-style-type: none;">
        <li><span style="font-weight:bold">Price:</span> £0.00</li>
        <li><span style="font-weight:bold">Brand:</span> BrandExample</li>
        <li><span style="font-weight:bold">Category:</span> CategoryExample</li>
        <li><span style="font-weight:bold">Keywords:</span> #keyword1, #keyword2, #keyword3</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- Other Products Row -->
  <h3 class="my-4">More Product Images</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
