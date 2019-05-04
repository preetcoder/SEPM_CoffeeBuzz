<?php
	$product_name = "";
	$product_price = "";
if(!empty($_POST)){
	print_r($_POST);
	$product_name = $_POST['productName'];
	$product_price = $_POST['productPrice'];
}else{
	header("Location: index.php");
}
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body class="cartpage">

		<?php include 'header.php';?>

			<section class="menu-area section-gap" id="cart_form">
			<div class="container">
				<div class="page-header">
				    <h1>Cart</h1>      
				  </div>
				<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Success!</strong> Product Added to cart.
				</div>
				<table class="table table-striped marginset">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">product Name</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">price</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td><?php echo $product_name?></td>
				      <td>1</td>
				      <td>$<?php echo $product_price?></td>
				    </tr>
				    
				  </tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td><td></td>
						<td><button class="primary-btn text-uppercase" data-toggle="modal" data-target="#exampleModal">Place order</button></td>
					</tr>					
				</tfoot>
				</table>
			</div>
			</section>
		
		
		<!-- Modal  -->
		<form action="success.php" method="POST">
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h6>Name</h6>
							<input type="text" id="username" name="customerName" placeholder="Enter Name">
							<br><br>
							<h6>Quantity</h6>
							<select name="qty">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							<br>
							<h6>Size</h6>
							<select name="size">
								<option value="S">Small</option>
								<option value="M">Medium</option>
								<option value="L">Large</option>
							</select>
							<input type="text" value="<?php echo $product_name?>" name="productName" hidden>
							<input type="text" name="price" value="<?php echo $product_price?>" hidden>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" id="placeOrder"><i class="fas fa-shopping-cart"></i> Place Order</button>
						</div>
					</div>
				</div>
			</div>
		</form>
			
			
			<!---->
			
				
			<?php include 'footer.php';?>
		</body>
	</html>



