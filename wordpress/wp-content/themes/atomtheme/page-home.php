<?php
/*
    Template Name: Home Page
 */

 // Custom fields



// advanced custom fields (ACF)

// Carousel ACF

$carousel_image_1     = get_field('carousel_image_1');
$caption_1_title      = get_field('caption_1_title');
$caption_1_button_1   = get_field('caption_1_button_1');
$button_1_href        = get_field('button_1_href');
$caption_1_button_2   = get_field('caption_1_button_2');

$carousel_image_2     = get_field('carousel_image_2');
$caption_2_title      = get_field('caption_2_title');
$caption_2_button_1   = get_field('caption_2_button_1');
$caption_2_button_2   = get_field('caption_2_button_2');

$carousel_image_3     = get_field('carousel_image_3');
$caption_3_title      = get_field('caption_3_title');
$caption_3_button_1   = get_field('caption_3_button_1');
$caption_3_button_2   = get_field('caption_3_button_2');

// Main gallery ACF

$image_1     = get_field('image_1');
$image_2     = get_field('image_2');
$image_3     = get_field('image_2');
$image_4     = get_field('image_2');
$image_5     = get_field('image_2');
$image_6     = get_field('image_2');
$image_7     = get_field('image_2');
$image_8     = get_field('image_2');






get_header();
?>
<!-- HOME PAGE FROM OLD ATOM THEME -->

<div class="container-fluid">

  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo $carousel_image_1['url']; ?>" alt="First Slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 22rem 0;">
            <h3 style="font-size: 3rem;"><?php echo $caption_1_title; ?></h3>
            <a href="<?php echo $button_1_href; ?>"><button type="button" class="btn btn-secondary"><?php echo $caption_1_button_1;?></button></a>
            <a href="#"><button type="button" class="btn btn-dark"><?php echo $caption_1_button_2; ?></button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $carousel_image_2['url']; ?>" alt="Second Slide" alt="Second slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 22rem 0;">
            <h3 style="font-size: 3rem;"><?php echo $caption_2_title; ?></h3>
            <a href="#"><button type="button" class="btn btn-secondary"><?php echo $caption_2_button_1; ?></button></a>
            <a href="#"><button type="button" class="btn btn-dark"><?php echo $caption_2_button_1; ?></button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $carousel_image_3['url']; ?>" alt="Third Slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 22rem 0;">
            <h3 style="font-size: 3rem;"><?php echo $caption_3_title; ?></h3>
            <a href="#"><button type="button" class="btn btn-secondary"><?php echo $caption_3_button_1; ?></button></a>
            <a href="#"><button type="button" class="btn btn-dark"><?php echo $caption_3_button_2; ?></button></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>

<div class="row" style="padding:20px;">
  <!-- below can be replaced by 'php allProducts function -->
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_1['url']; ?>"></div>
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_2['url']; ?>"></div>
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_3['url']; ?>"></div>

  <a href="http://localhost:8080/atomtheme/wordpress/itempage/"><div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_4['url']; ?>"></div></a>
  <div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_5['url']; ?>"></div>

  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_6['url']; ?>"></div>
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_7['url']; ?>"></div>
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><img src="<?php echo $image_8['url']; ?>"></div>
</div>

</div>



<?php

get_footer();
?>
