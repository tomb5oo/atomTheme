<?php

$company_name     = get_field('company_name');
$company_address  = get_field('company_address');
$company_hours    = get_field('company_hours');
$company_phone    = get_field('company_phone');
$company_email    = get_field('company_email');


get_header(); ?>




  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">

      </div>
          <

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152201.77188059303!2d-3.0561408714013165!3d53.41209544328504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487adf8a647060b7%3A0x42dc046f3f176e01!2sLiverpool!5e0!3m2!1sen!2suk!4v1555062039212!5m2!1sen!2suk"
          width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3><?php echo $company_name; ?></h3>
              <p><?php echo $company_address; ?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654"><?php echo $company_phone; ?></a></h3>
              <p><?php echo $company_hours; ?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i><?php echo $company_email; ?></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

<?php get_footer(); ?>
