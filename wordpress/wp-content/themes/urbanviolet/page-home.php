<?php
/*
    Template Name: Home Page
 */

 // Custom fields

$price                  = get_post_meta( 11, 'price', true);
$new_price              = get_post_meta( 11, 'new_price', true);
$future_price           = get_post_meta( 11, 'future_price', true);
$course_url             = get_post_meta( 11, 'course_url', true);
$btn_text               = get_post_meta( 11, 'button_text', true);

// advanced custom field

$income_feature_image   = get_field('$income_feature_image');
$income_section_title   = get_field('$income_section_title');
$income_section_desc    = get_field('$income_section_description');
$reason_1_title         = get_field('$reason_1_title');
$reason_1_desc          = get_field('$reason_1_description');
$reason_2_title         = get_field('$reason_2_title');
$reason_2_desc          = get_field('$reason_2_description');


get_header();
?>

<!--HERO
=========================================== -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">
        <div class="col-sm-5">
<!--						<img src="#" alt="Bootstrap to Wordpress" class="logo">-->
        </div><!--col-->

        <div class="col-sm-7 hero-text">
          <h1><?php bloginfo('name')?></h1>
          <p class="lead"><?php bloginfo('description')?> </p>

          <div id="price-timeline">
            <div class="price active">
              <h4>Price <small>Ends soon!</small></h4>

              <span><?php echo $price; ?></span>
            </div><!--price-->

            <div class="price">
              <h4>New price <small>Coming soon!</small></h4>

              <span><?php echo $new_price; ?></span>
            </div><!--price-->

            <div class="price">
              <h4>Future Price <small>Coming soon!</small></h4>

              <span><?php echo $future_price; ?></span>
            </div><!--price-->
          </div><!--price timeline-->

          <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $btn_text; ?></a></p>
        </div><!--col-->

      </div><!--row-->
    </div>
  </article>
</section><!--hero-->

<!--OPT IN SECTION
=========================================== -->
<section id="optin">
  <div class="container">
    <div class="row">

      <div class="col-sm-8">
        <p class="lead"><strong>Subscribe to our mailing list</strong> We'll send something special as a thank you</p>
      </div><!--col-->

      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Click here to subscribe</button>
      </div><!--col-->

    </div>
  </div>

</section>

<!--BOOST YOUR INCOME
=========================================== -->
<section id="boost-income">
  <div class="container">
    <div class="section-header">

      <?php
          if ( !empty($income_feature_image) ) : ?>

          <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">

        <?php endif; ?>


      <h2><?php echo $income_section_title ?></h2>
    </div><!--section header-->

    <p class="lead"><? php echo $income_section_desc ?></p>

    <div class="row">
      <div class="col-sm-6">
        <h3><? php echo $reason_1_title ?></h3>
        <p><? php echo $reason_1_desc ?> </p>

        </div>

      <div class="col-sm-6">
        <h3>make money on the side</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>

    </div>
  </div>

</section>

<!--WHO BENEFITS
=========================================== -->
<section id="who-benefits">
  <div class="container">
    <div class="section-header">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and pencil">
      <h2>Who should take this course?</h2>
    </div><!--section header-->

    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h3>Graphics &amp; Web Designers</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>

        <h3>Graphics &amp; Web Designers</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>

        <h3>Graphics &amp; Web Designers</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>

        <h3>Graphics &amp; Web Designers</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>
      </div><!--col-->


    </div><!--row-->

  </div>

</section>

<!--COURSE FEATURES
=========================================== -->
<section id="course-features">
  <div class="container">
    <div class="section-header">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
      <h2>Course Features</h2>

    </div><!--section header-->

    <div class="row">
      <div class="col-sm-2">
        <i class="ci ci-computer"></i>
        <h4>Lifetime access</h4>
      </div>

      <div class="col-sm-2">
        <i class="ci ci-watch"></i>
        <h4>Lifetime access</h4>
      </div>

      <div class="col-sm-2">
        <i class="ci ci-calendar"></i>
        <h4>Lifetime access</h4>
      </div>

      <div class="col-sm-2">
        <i class="ci ci-community"></i>
        <h4>Lifetime access</h4>
      </div>

      <div class="col-sm-2">
        <i class="ci ci-instructor"></i>
        <h4>Lifetime access</h4>
      </div>

      <div class="col-sm-2">
        <i class="ci ci-device"></i>
        <h4>Lifetime access</h4>
      </div>
    </div>
  </div>

</section>

<!--PROJECT FEATURES
=========================================== -->
<section id="project-features">
  <div class="container">
    <h2>final project features</h2>
    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>

    <div class="row">
      <div class="col-sm-4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="design">
        <h3>Sexy &amp; Modern Design</h3>
        <p>you get to work with a modern, professional quality</p>

      </div>

      <div class="col-sm-4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="code">
        <h3>Sexy &amp; Modern Design</h3>
        <p>you get to work with a modern, professional quality</p>

      </div>

      <div class="col-sm-4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="design">
        <h3>Sexy &amp; Modern Design</h3>
        <p>you get to work with a modern, professional quality</p>

      </div>

    </div>
  </div>

</section><!--project features-->

<!--VIDEO FEATURETTE
=========================================== -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>Watch the course intro</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/c9pRNjTHrFU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>

    </div>
  </div>

</section><!--featurette-->

<!--INSTRUCTOR
=========================================== -->
<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h2>Your Instructor <small>Tom Bennett</small></h2>
          </div><!--col-->
          <div class="col-lg-4">
            <a href="https://dreamfrequency.net" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://dreamfrequency.net" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://dreamfrequency.net" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>

          </div><!--col-->
        </div><!--row-->

        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>

        <hr>

        <h3>the numbers <small>they dont' lie</small></h3>

        <div class="row">
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
              41,000 <span>students</span>
              </div>
            </div>

          </div>

          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
              568 <span>reviews</span>
              </div>
            </div>

          </div>

          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
              8 <span>courses</span>
              </div>
            </div>

          </div>

        </div>
      </div><!--col-->

    </div><!--row-->

  </div><!--containter-->

</section><!--instructor-->

<!--TESTIMONIALS
=========================================== -->
<section id="kudos">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>what people are saying about tom</h2>

        <!--TESTIMONIAL-->
        <div class="row testomonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">

          </div>
          <div class="col-sm-8">
            <blockquote>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong>
              <cite>&mdash;</cite>
            </blockquote>
          </div>
        </div>

        <div class="row testomonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">

          </div>
          <div class="col-sm-8">
            <blockquote>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong>
              <cite>&mdash; Tom said theses really nice things about me</cite>
            </blockquote>
          </div>
        </div>

        <div class="row testomonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="AJ">

          </div>
          <div class="col-sm-8">
            <blockquote>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong>
              <cite>&mdash;</cite>
            </blockquote>
          </div>
        </div>

        <div class="row testomonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">

          </div>
          <div class="col-sm-8">
            <blockquote>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <strong>software like Aldus PageMaker including versions of Lorem Ipsum.</strong>
              <cite>&mdash;</cite>
            </blockquote>
          </div>
        </div>

      </div>

    </div>
  </div>

</section>

<?php

get_footer();
?>
