<?php if(current_user_can('administrator')){ //check for an admin login

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
        <?php
        //Check if submit button is pressed
            if(isset($_POST['newitem'])){
                //Declare variables for form inputs
                $name = $_POST['name'];
                $description = $_POST['description'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $category = $_POST['category'];
                $brand = $_POST['brand'];
                $keywords = $_POST['keywords'];

                //Insert new row into search table with submitted inputs
                $sql = "INSERT INTO search(id, name, description, image, price, category, brand, keywords) VALUES (NULL, '$name', '$description', '$image', '$price', '$category', '$brand', '$keywords')";
                $result = $conn->query($sql);

                //Redirect
                // header("Location: http://localhost/atomtheme/wordpress/additem/");
                // exit();


            }
            ?>
  		</div>
  	</div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
        <form method="post" action="">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Item Name">
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" name="description" placeholder="Brief description."></textarea>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="image" placeholder="Image file name + extesion (e.g.: image.jpg)">
            <small class="form-text text-muted">Image must be uploaded to 'atomtheme/assets/img'</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Price (Must be an integer)">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="category" placeholder="Category">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="brand" placeholder="Brand">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="keywords" placeholder="Keywords (Seperated by commas)">
          </div>
          <button type="submit" name="newitem" class="btn btn-danger">Post</button>
        </form>
      </div>
    </div>

  </div>

	<br/><br/><br/><br/>

  <?php get_footer(); ?>


<?php }else{
  echo "You do not have access, please return to previous page.";
} //close if loop checking for admin login?>
