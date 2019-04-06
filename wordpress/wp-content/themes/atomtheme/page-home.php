<?php
/*
    Template Name: Home Page
 */

 // Custom fields



// advanced custom field

$caption_1_title      = get_field('caption_1_title');
$caption_1_button_1   = get_field('caption_1_button_1');
$caption_1_button_2   = get_field('caption_1_button_2');



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
          <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trees.jpeg" alt="First Slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 15rem 0;">
            <h3 style="font-size: 3rem;"><?php echo $caption_1_title; ?></h3>
            <a href="#"><button type="button" class="btn btn-secondary"><?php echo $caption_1_button_1; ?></button></a>
            <a href="#"><button type="button" class="btn btn-dark"><?php echo $caption_1_button_2; ?></button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trees.jpeg" alt="Second Slide" alt="Second slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 15rem 0;">
            <h3 style="font-size: 3rem;">Hello World</h3>
            <a href="#"><button type="button" class="btn btn-secondary">Button 1</button></a>
            <a href="#"><button type="button" class="btn btn-dark">Button 2</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trees.jpeg" alt="Third Slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 15rem 0;">
            <h3 style="font-size: 3rem;">Hello World</h3>
            <a href="#"><button type="button" class="btn btn-secondary">Button 1</button></a>
            <a href="#"><button type="button" class="btn btn-dark">Button 2</button></a>
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

<div class="row">
  <!-- below can be replaced by 'php allProducts function -->
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>

  <div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
  <div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>

  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
  <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
</div>

</div>



<?php

get_footer();
?>
