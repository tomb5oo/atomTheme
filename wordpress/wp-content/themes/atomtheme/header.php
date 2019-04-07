<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package urbanViolet
 */

// advanced custom fields

 $your_logo   = get_field('your_logo');
 $item_1      = get_field('item_1');
 $item_2      = get_field('item_2');
 $item_3      = get_field('item_3');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr" <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="https://gmpg.org/xfn/11">

    <!--Character Set-->
    <meta charset="utf-8">

    <!--Site Title-->
    <title></title>

    <!--Meta Tags-->
    <meta name="description" content="">
    <meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<!--Bootstrap Core CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"><!--Bootstrap CSS CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--Bootstrap JQuery CDN-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script><!--Bootstrap JS CDN-->

    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

		<!--FontAwesome Icons-->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--jQuery CDN-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

		<?php wp_head(); ?>

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

  </head>

	<body <?php body_class(); ?>>
		<header class="site-header" role="banner">
			<!--Bootstrap Navbar-->
			<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="margin:0;border-radius:0;">


<!-- if user uploaded a logo in wordpress -->


          <?php if( !empty($your_logo) ) : ?>

          <a class="navbar-brand" href="javascript:void(0)"><img src="<?php echo $your_logo['url']; ?>"</a>

        <?php endif; ?>


			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navb">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="javascript:void(0)"><?php echo $item_1; ?></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="javascript:void(0)"><?php echo $item_2; ?></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="javascript:void(0)"><?php echo $item_3; ?></a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-xl-0" style="float: right;">
			      <input class="form-control mr-sm-2" type="text" placeholder="Search">
			      <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
			    </form>
			  </div>
			</nav>


			<?php
					// wp_nav_menu( array(
          //
					// 	'theme_location'		=> 'primary',
					// 	'containter'				=> 'nav',
					// 	'container_class'		=> 'navbar-collapse collapse',
					// 	'menu_class'				=> 'nav navbar-nav navbar-right'
          //
					// ));
			?>

			<!-- THIS HAS BEEN REPLACED BY WORDPRESS wp_nav_menu ABOVE -->

			<!-- <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="blog.html">Resources</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		-->

		</div><!--container-->

	</div><!--navbar-->
</div> <!--navbar-wrapper-->


</header>


	<!-- <div id="content" class="site-content"> -->
