<?php  //if(current_user_can('admininstrator')){//check for an admin login

  get_header();

  ///////COMMENT OUT OTHER PERSONS CONFIG//////
  //include('configTom.php');
   include('configAsh.php');


  ?>
  <br />



  	<!-- CART FUNCTIONALITY -->
  <div class="container-fluid">

  	<div class="row">
  		<div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
  			<h1 class="my-4">Add a New Item to Sell!</h1>
      </div>
  	</div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">


        <form method="POST" action="" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" name="name1" placeholder="Item Name">
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" name="description1" placeholder="Brief description."></textarea>
          </div>
          <div class="form-group">
            <input type="file" name="product_image" class="form-control-file" placeholder="Image file name + extesion (e.g.: image.jpg)">
            <small class="form-text text-muted">Image must be uploaded to 'atomtheme/assets/img'</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="price1" placeholder="Price (Must be an integer)">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="category1" placeholder="Category">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="brand1" placeholder="Brand">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="keywords1" placeholder="Keywords (Seperated by commas)">
          </div>
          <input type="submit" name="submit" class="btn btn-danger" value="submit">
        </form>
      </div>
    </div>

  </div>

	<br/><br/><br/><br/>

  <?php get_footer();




  //Check if submit button is pressed
      if($_POST['submit']){
          //Declare variables for form inputs
          $name = $_POST['name1'];
          $description = $_POST['description1'];
          // $image = $_POST['image1'];
          $price = $_POST['price1'];
          $category = $_POST['category1'];
          $brand = $_POST['brand1'];
          $keywords = $_POST['keywords1'];

          //get image from input field
          //get image from input field
          $product_image = $_FILES['product_image']['name'];
          $product_image_tmp = $_FILES['product_image']['tmp_name'];

        move_uploaded_file($product_image_tmp, "assets/img/$product_image");


          //Insert new row into search table with submitted inputs
          $sql = "INSERT INTO products (id, name, description, image, price, category, brand, keywords) VALUES (NULL, '$name', '$description', '$product_image', '$price', '$category', '$brand', '$keywords')";
          // $result = $conn->query($sql);
          $result = mysqli_query($conn, $sql);

          //Redirect
          // header("Location: http://localhost/atomtheme/wordpress/additem/");
          // exit();

      }
    // }else{
    //   echo "You do not have access, please return to previous page.";
    // } //close if loop checking for admin login

      ?>
