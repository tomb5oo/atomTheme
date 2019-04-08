<?php
/*
    Template Name: Login Page
 */

 get_header();
 //call header.php

 ?>
 <script>$(document).ready(function(){

    // Variables
    var clickedTab = $(".tabs > .active");
    var tabWrapper = $(".tab__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();

    // Show tab on page load
    activeTab.show();

    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);

    $(".tabs > li").on("click", function() {

        // Remove class from active tab
        $(".tabs > li").removeClass("active");

        // Add class active to clicked tab
        $(this).addClass("active");

        // Update clickedTab variable
        clickedTab = $(".tabs .active");

        // fade out active tab
        activeTab.fadeOut(250, function() {

            // Remove active class all tabs
            $(".tab__content > li").removeClass("active");

            // Get index of clicked tab
            var clickedTabIndex = clickedTab.index();

            // Add class active to corresponding tab
            $(".tab__content > li").eq(clickedTabIndex).addClass("active");

            // update new active tab
            activeTab = $(".tab__content > .active");

            // Update variable
            activeTabHeight = activeTab.outerHeight();

            // Animate height of wrapper to new tab height
            tabWrapper.stop().delay(50).animate({
                height: activeTabHeight
            }, 500, function() {

                // Fade in active tab
                activeTab.delay(50).fadeIn(250);

            });
        });
    });
});</script>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12" style="height:800px;">

      <!--Login Form-->
      <section class="loginWrapper">

      	<ul class="tabs">
      		<li class="active">Login</li>
      		<li>Register</li>
      	</ul>

      	<ul class="tab__content">

      		<li class="active" style="top:-10px;">
      			<div class="content__wrapper">
      				<form method="POST" action="">
      					<input type="email" name="email" placeholder="email">
      					<input type="password" name="password" placeholder="Password">
      					<input type="submit" value="Login" name="login">
      				</form>
      			</div>
      		</li>

      		<li style="top:-10px;">
      			<div class="content__wrapper">
      				<form method="POST" action="">
      					<input type="name" name="name" placeholder="Username">
      					<input type="email" name="email" placeholder="email">
      					<input type="pass" name="pass" placeholder="Password">
      					<input type="repass" name="repass" placeholder="Repeat-Password">
      					<input type="submit" value="Register" name="register">
      				</form>
      			</div>
      		</li>

      	</ul>
      </section>
      <!--End of login form-->

    </div>
  </div>
</div>

<?php get_footer(); ?>
