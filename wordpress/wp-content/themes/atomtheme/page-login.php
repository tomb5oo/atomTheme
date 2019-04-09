<?php
/*
    Template Name: Login Page
 */

 get_header();
 //call header.php

include('config.php');

/*********************************************/
    //Check if email already exists in database
	function email_taken($email, $conn){

		$sql = "SELECT id FROM users WHERE email='$email'";
		$result = $conn->query($sql);

		if(mysqli_num_rows($result) == 1){
			return true;
		}else{
			return false;
		}
	}
	/*********************************************/
    //Check to see if user is logged in (active session or cookie)
	function logged_in(){
		//check if user is logged in - session or cookie is set
		if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
			return true;
		}else{
			return false;
		}
	}
  /*********************************************/


  /*********************************************/
  //Set variable for error display message
	$errorCheckResult = "";

    //check if submit button was pressed
	if(isset($_POST['register'])){

        //set form input values to variables and make sure it is a string
		$firstName = mysqli_real_escape_string($conn, $_POST['fname']);
		$lastName = mysqli_real_escape_string($conn, $_POST['lname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['pass']);
		$passwordConfirm = $_POST['repass'];

        //Check first name is at least 3 letters
		if(strlen($firstName) < 3){
			$errorCheckResult = "First name must be at least 3 characters long.";
		}

        //Check last name is at least 3 letters
		else if(strlen($lastName) < 3){
			$errorCheckResult = "Last name must be at least 3 characters long.";
		}

        //Check that email is a valid email format
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errorCheckResult = "Please use a valid email.";
		}

        //Check if email is already in database using function from functions.php
		else if(email_taken($email, $conn)){
			$errorCheckResult = "This email is taken.";
		}

        //Make sure password is at least 8 letters
		else if(strlen($password) < 8){
			$errorCheckResult = "Password must be at least 8 characters long.";
		}

        //Check confirm matches password
		else if($password !== $passwordConfirm){
			$errorCheckResult = "Passwords do not match.";
		}

		else{

          //encrypt password
			$password = password_hash($password, PASSWORD_DEFAULT);

        //Create query - insert values from inputs into a new row in users table
			$sql = "INSERT INTO users(id, firstName, lastName, email, password, token) VALUES (NULL, '$firstName', '$lastName', '$email', '$password', '')";
			if(mysqli_query($conn, $sql)){
				$errorCheckResult = "Successfully registered!";
			}
		}
	}
 ?>

 <script>
 $(document).ready(function(){

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
});
</script>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12" style="height:800px;">

      <!--Login Form-->

      <section class="loginWrapper">

        <p id="errorCheckResult" style="<?php if($errorCheckResult == 'Successfully registered!'){?>color:green;"><?php }else if($errorCheckResult !== 'Successfully registered!'){?>color:red;"><?php } ?> <?php echo $errorCheckResult; ?></p>

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
      					<input type="name" name="fname" placeholder="First Name">
                <input type="name" name="lname" placeholder="Last Name">
      					<input type="email" name="email" placeholder="E-mail">
      					<input type="password" name="pass" placeholder="Password">
      					<input type="password" name="repass" placeholder="Confirm Password">

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
