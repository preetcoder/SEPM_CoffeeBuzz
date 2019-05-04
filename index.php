<?php $db = include_once 'db.php'; ?>
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
		<body>

<?php include 'header.php';?>	

			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
							<h1>
								Start your day with <br>
								a Cappuccino 
							</h1>
							<a href="#coffee" class="primary-btn text-uppercase">Buy Now</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start video-sec Area -->
			<section class="video-sec-area pb-100 pt-40" id="about">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a>
						</div>						
						<div class="col-lg-6 video-left">
							
							<?php 
									// get orders from db
									$sql = "SELECT * FROM orders WHERE status = 1";
									$result = mysqli_query($db,$sql);
									$count = 0;

							?>
							<h1>Orders List</h1>
							Estimate waiting time<span class="badge badge-pill badge-info badge-lg">
							<?php if (mysqli_num_rows($result) > 0) { echo mysqli_num_rows($result) * 2; }

							 ?></span>
							<div class="order_lists">
							<ul class="list-group list-group-flush">
								<?php
								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
									$count++;
								?>
								       <li class="list-group-item"><span><?php echo $count; ?></span> <h4><?php echo $row["ProductName"] ?></h4></li>
 
								  <?php   }
								} else {
								?>
								     <li class="list-group-item"><h4>No Orders</h4></li>
															
								<?php }

	
							 ?>
							
							  
							
							</ul>
						</div>
					</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start menu Area -->
				<section class="menu-area section-gap" id="coffee">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-60 col-lg-10">
								<div class="title text-center">
									<h1 class="mb-10">What kind of Coffee we serve for you</h1>
									<p>Who are in extremely love with eco friendly system.</p>
								</div>
							</div>
						</div>						
						<div class="row">
							<div class="col-lg-4">
								<div class="single-menu">
								<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
											<input type="text" name="productName" value="Cappuccino" hidden>
												<h4>Cappuccino</h4>
												<p class="price float-right">
														<input type="text" name="productPrice" value="3.5" hidden>
													$3.5
												</p>
											</div>
											<p>
													With less milk than a latte, cappuccino offers a stronger espresso flavour and a luxurious texture. 
													<!-- <a href="cart.html?name=Cappuccino&price=49"></a> -->
											<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>												
								</form>
								</div>
							</div>
								<div class="col-lg-4">
								<div class="single-menu">
								<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
										<input type="text" name="productName" value="Americano" hidden>
										<h4>Americano</h4>
										<p class="price float-right">
											<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
									We’ve tasted many a splendid cup of coffee.Each one offers something different.
									</p>
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>				
								</div>
							</div>
							</form>
							<div class="col-lg-4">
								<div class="single-menu">
								<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
									<input type="text" name="productName" value="Espresso" hidden>
										<h4>Espresso</h4>
										<p class="price float-right">
											<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
										Smooth and versatile Espresso Roast has its own rich flavour with lingering aroma and caramelly sweetness.
									</p>	
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>																
								</form>
								</div>
							</div>	
							<div class="col-lg-4">
								<div class="single-menu">
									<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
										<input type="text" name="productName" value="Macchiato" hidden>
										<h4>Macchiato</h4>
										<p class="price float-right">
											<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
										Scores of people are passionate devotees of this signature beverage.
									
									</p>
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>																		
									</form>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="single-menu">
									<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
											<input type="text" name="productName" value="Mocha" hidden>
										<h4>Mocha</h4>
										<p class="price float-right">
											<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
										There’s no question that chocolate and coffee are flavours meant for each other.
									</p>	
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>															
								</form>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="single-menu">
										<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
											<input type="text" name="productName" value="Coffee Latte" hidden>
										<h4>Coffee Latte</h4>
										<p class="price float-right">
												<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
										This is the original coffeehouse classic. Both are rich and full of depth.
									</p>	
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>																	
									</form>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="single-menu">
										<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
											<input type="text" name="productName" value="Piccolo Latte" hidden>
										<h4>Piccolo Latte</h4>
										<p class="price float-right">
												<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
										We add freshly steamed milk to our world famous cinnamon dolce syrup and bold espresso.
									</p>	
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>																	
								</form>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="single-menu">
								<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
											<input type="text" name="productName" value="Ristretto" hidden>
										<h4>Ristretto</h4>
										<p class="price float-right">
												<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
										This is the perfect introduction to espresso for those who are unsure they’re ready for the full-throttle.
									</p>	
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>															
								</form>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="single-menu">
									<form action="cart.php" method="POST">
									<div class="title-div justify-content-between d-flex">
											<input type="text" name="productName" value="Flat White" hidden>
										<h4>Flat White</h4>
										<p class="price float-right">
												<input type="text" name="productPrice" value="3.5" hidden>
											$3.5
										</p>
									</div>
									<p>
										Expertly steamed milk poured over a double shot, slightly stronger than a latte, with steamed milk.
									</p>	
									<button type="submit" class="btn-info text-uppercase right">Add To Cart</button>																	
								</form>
								</div>
							</div>															
						</div>
					</div>	
				</section>
			<!-- End menu Area -->
			
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<a href="img/g1.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g1.jpg" alt="">
							</a>	
							<a href="img/g2.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g2.jpg" alt="">
							</a>	
						</div>
						<div class="col-lg-8">
							<a href="img/g3.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g3.jpg" alt="">
							</a>	
							<div class="row">
								<div class="col-lg-6">
									<a href="img/g4.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/g4.jpg" alt="">
									</a>	
								</div>
								<div class="col-lg-6">
									<a href="img/g5.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/g5.jpg" alt="">
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r1.png" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r2.png" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2536</h1>
							<p>Happy Client</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">7562</h1>
							<p>Total Projects</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2013</h1>
							<p>Cups Coffee</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">10536</h1>
							<p>Total Submitted</p>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End review Area -->
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b1.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b2.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
			
			<?php include 'footer.php';?>
		
		</body>
	</html>



