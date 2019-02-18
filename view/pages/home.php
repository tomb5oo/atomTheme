<?php
  include('header.php');
  include('nav.php');
?>
test 123
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
          <img class="d-block w-100" src="<?php echo DIR ?>media/images/trees.jpeg" alt="First slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 15rem 0;">
            <h3 style="font-size: 3rem;">Hello World</h3>
            <a href="#"><button type="button" class="btn btn-secondary">Button 1</button></a>
            <a href="#"><button type="button" class="btn btn-dark">Button 2</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo DIR ?>media/images/trees.jpeg" alt="Second slide" height="650px">
          <div class="carousel-caption d-md-block" style="margin: 15rem 0;">
            <h3 style="font-size: 3rem;">Hello World</h3>
            <a href="#"><button type="button" class="btn btn-secondary">Button 1</button></a>
            <a href="#"><button type="button" class="btn btn-dark">Button 2</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo DIR ?>media/images/trees.jpeg" alt="Third slide" height="650px">
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

</div>

<?php include('footer.php') ?>
