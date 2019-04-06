<?php
  include('header.php');
  include('nav.php');
?>

    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">
          <div class="row" style="margin: 5% 0;">
            <div class="col-10 offset-1">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../../media/images/tshirt1.jpg" alt="First slide" height="auto" width="100%">
                    <div class="carousel-caption d-md-block"></div>
                  </div>

                  <?php individualProductCarousel() ?>

                  <!-- MOVED TO controls.php - left in as temporary reference -->

                  <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="media/images/tshirt2.jpg" alt="Second slide" height="auto" width="100%">
                    <div class="carousel-caption d-md-block"></div>
                  </div> -->
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../media/images/tshirt3.jpg" alt="Third slide" height="auto" width="100%">
                    <div class="carousel-caption d-md-block"></div>
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
        </div>

        <?php individualProductDescription() ?>
        <!-- <div class="col-lg-6 col-md-4 col-sm-12">
          <div class="col-12" style="margin: auto 0">
            <div class="row">
              <h2>Item Name</h2>
            </div>
            <div class="row">
              <h3>Subheader</h3>
            </div>
            <div class="row">
              <p>Description - orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="row">
              <p style="margin: auto 10px auto 0;font-weight:bold;">Price: £0.00</p>
              <div id="input_div" style="margin: auto 10px auto 0">
                  <button class="btn btn-outline-light text-dark" type="button" id="moins" onclick="minus()">-</button>
                  <input type="text" size="5" value="1" id="count" style="text-align:center;height:36px;">
                  <button class="btn btn-outline-light text-dark" type="button" id="plus" onclick="plus()">+</button>
              </div>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Add to basket</button>
            </div>
          </div>
        </div> -->
      </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
      <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
      <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>

      <div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
      <div class="col-lg-6 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>

      <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
      <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
      <div class="col-lg-4 col-md-6 col-xs-12" style="padding: 1rem;"><div style="background-color: red; height: 16rem;">Hello</div></div>
    </div>

    <div class="row">
      <footer class="page-footer font-small pt-4" style="background-color: lightgrey;">
        <div class="container-fluid text-center text-md-left">
          <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
              <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae harum esse fugiat. Itaque, culpa?</p>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-6 mb-md-0 mb-3">
              <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id excepturi hic.</p>
            </div>
          </div>
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
          </div>
        </div>
      </footer>
    </div>

    </div>

  <?php include('footer.php') ?>
