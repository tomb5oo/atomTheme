<?php
  include('header.php');
  include('nav.php');
?>

<!--CART-->
<!-- <div class="container">
  <div class="row"> -->
  	<table id="cart" class="table table-hover table-condensed">
  		<thead>
  			<tr>
  				<th style="width:20%">Product</th>
  				<th style="width:10%">Price</th>
  				<th style="width:40%">Description</th>
  				<th style="width:20%" class="text-center">Subtotal</th>
  				<th style="width:10%"></th>
  			</tr>
  		</thead>
  		<tbody>

        <?php allProducts(); ?>

  <!-- MOVED TO CONTOLS productImage() - this is here as a temporary reminder -->

  			<!-- <tr>
  				<td data-th="Product">
  					<div class="row">
  						<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
  						<div class="col-sm-10">
  							<h4 class="nomargin">Product 2</h4>
  							<p>Atom theme product description goes here...Atom theme product description goes here...Atom theme product description goes here </p>
  						</div>
  					</div>
  				</td>
  				<td data-th="Price">$1.99</td>
  				<td data-th="Quantity">
  					<input type="number" class="form-control text-center" value="1">
  				</td>
  				<td data-th="Subtotal" class="text-center">1.99</td>
  				<td class="actions" data-th="">
  					<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
  					<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
  				</td>
  			</tr> -->

  		</tbody>
  		<tfoot>
  			<tr class="visible-xs">
  				<td class="text-center"><strong>Total 1.99</strong></td>
  			</tr>
  			<tr>
  				<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
  				<td colspan="2" class="hidden-xs"></td>
  				<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
  				<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
  			</tr>
  		</tfoot>
  	</table>
  <!-- </div>
</div> -->

<?php include('footer.php') ?>
