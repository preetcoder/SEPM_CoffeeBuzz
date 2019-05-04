<?php $db = include_once 'db.php'; 


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
		<body class="popup">


<section class="menu-area section-gap" id="order_page">
			<div class="container">
				<div class="page-header">
				    <h1>Orders</h1>      
				  </div>
				
				<div class="all_orders">
					<ul class="list-group list-group-flush">
					<?php 
									// get orders from db
							$sql = "SELECT * FROM orders WHERE status = 1 ORDER BY orderId DESC;";
									$result = mysqli_query($db,$sql);
									$count = 0;
								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
									$count++;
								?>
								<form action="complete.php" method="post">
									<li class="list-group-item"><span class="srno"><?php echo $count; ?></span><h4 class="PrName"><?php echo $row["ProductName"]; ?></h4>
											<input type="text" value="<?php echo $row["orderId"];?>" name="orderId">
										<button name="complete" class="btn btn-default praright" >Complete</button>
									</li>
								</form>
  <?php   }
								} else {
								?>
								     <li class="list-group-item"><h4>No Orders</h4></li>
															
								<?php }

	
							 ?>
  </ul>
				</div>
			</div>
			</section>
		
		
		<!-- Modal  -->
		
			
			
			<?php
			// check if modal submit clicked


//check password

$value = !empty($_REQUEST['userPass']) ? $_POST['userPass'] : "";

if(strcmp($value, "123") != 0){

?>
<form action="" method="POST">
			<div class="modal fade" id="regModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="regModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Enter password to access this page </h5>
							
						</div>
						<div class="modal-body">
							
 
					  <div class="form-group">
					    <label for="userPass">Password</label>
					    <input type="password" class="form-control" name="userPass" id="userpass" placeholder="Password">
					  </div>

						</div>
						<div class="modal-footer">
							<button type="submit" name="checkin" class="btn btn-primary" id="checkin">Check In</button>
						</div>
					</div>
				</div>
			</div>
		</form>

<?php
}

?>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>	
			<script>
 $(document).ready(function() {
	$("#checkin").attr('disabled',true);
$('#userpass').keyup(function(){
        if($(this).val().length !=0)
            $('#checkin').attr('disabled', false);
        else
            $('#checkin').attr('disabled',true);
    });
 $("#regModal").modal('show');
});
			

</script>
			<!---->
			<?php //include 'footer.php'; ?>
		</body>
	</html>
