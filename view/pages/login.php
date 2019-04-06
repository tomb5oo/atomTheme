<?php
  include('header.php');
  include('nav.php');
?>

<!--   LOGIN-->
<div class="login_register_form">

  <ul class="login_selection_tab">

    <li class="selection_tab active"><a href="#signup">Sign Up</a></li>
    <li class="selection_tab"><a href="#login">Log In</a></li>

  </ul><!-- login_selection_tab -->

  <div class="form_content">
    <div id="signup_tab">
      <h1>Sign Up for Free</h1>

      <form action="/" method="post" id="signup_form">

      <div class="top_row">

        <div class="input_field_wrap">
          <label>
            First Name<span class="req">*</span>
          </label>
          <input type="text" required autocomplete="off" />
        </div><!-- input_field_wrap -->

        <div class="input_field_wrap">
          <label>
            Last Name<span class="req">*</span>
          </label>
          <input type="text" required autocomplete="off"/>
        </div><!-- input_field_wrap -->

      </div><!-- top_row -->

      <div class="input_field_wrap">
        <label>
          Email Address<span class="req">*</span>
        </label>
        <input type="email" required autocomplete="off"/>
      </div><!-- input_field_wrap -->

      <div class="input_field_wrap">
        <label>
          Set A Password<span class="req">*</span>
        </label>
        <input type="password"required autocomplete="off"/>
      </div><!-- input_field_wrap -->

      <button type="submit" class="submit_button submit_button_block">Get Started</button>

    </form><!-- signup_form -->

    </div>

    <div id="login_tab">

      <h1>Welcome Back!</h1>

      <form action="/" method="post" id="login_form">

        <div class="input_field_wrap">

          <label>
            Email Address<span class="req">*</span>
          </label>

          <input type="email" required autocomplete="off"/>

        </div><!-- input_field_wrap -->

        <div class="input_field_wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password" required autocomplete="off"/>
        </div><!-- input_field_wrap -->

        <p class="forgotpwd"><a href="#">Forgot Password?</a></p>

        <button type="submit" class="submit_button submit_button_block">Log In</button>

      </form><!-- login_form -->

    </div><!-- login_tab -->

  </div><!-- form_content -->

</div> <!-- /login_register_form -->
<div id="test">
  
</div>
<?php include('footer.php') ?>
