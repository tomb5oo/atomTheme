
<?php include('header.php'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

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
