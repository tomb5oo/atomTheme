<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package urbanViolet
 */

?>



<?php wp_footer(); ?>

<!--SIGN UP
=========================================== -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take your coding skill to the <strong>next level</strong></h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success">Yes sign me up!</a></p>

			</div>

		</div>
	</div>

</section><!--signup-->

<!--FOOTER
=========================================== -->
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/."><img src="assets/img/logo.png" alt="bootstrap to wordpress"></a></p>
		</div>
		<div class="col-sm-6">
			<nav>
				<ul class="list-unstyled list-inline">
					<li><a href="">Home</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Resources</a></li>
					<li><a href="">Contact</a></li>
					<li class="signup-link"><a href="">Sign up now</a></li>
				</ul>

			</nav>

		</div>
		<div class="col-sm-3">
			<p class="pull-right">&copy; tom bennett</p>
		</div>
	</div>
</footer>

<!--MODAL
=========================================== -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our mailing list</h4>
				</div><!--modal header-->


				<div class="modal-body">
					<p>Enter you name and email</p>

					<form class="form-inline" role="form">

						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first Name</label>

							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">

						</div><!--form group-->
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>

							<input type="text" class="form-control" id="subscribe-email" placeholder="your email">

						</div><!--form group-->

						<input type="submit" class="btn btn-danger" value="subscribe!">

					</form>

					<hr>

					<p><small>unsubscirbe</small></p>
				</div><!--modal body-->



		</div><!--modal conent-->

	</div><!--modal dialog-->
</div><!--modal-->

<!--HERO
=========================================== -->

<!--HBOOTSTRAP CORE JAVASCRIPT
	Placed at the end of the document so the pages load faster!
=========================================== -->
<script> src=<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</body>
</html>
