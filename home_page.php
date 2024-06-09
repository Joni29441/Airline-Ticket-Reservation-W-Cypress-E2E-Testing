<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Turkish Airlines
		</title>
		<link rel="stylesheet" type="text/css" href="css\styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css\bootstrap.css"/>
		<link rel="stylesheet" href="pricing.css" >
		<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<style>

			.container {
				width: 150%; /* Full width */
				margin-left:-1.01%;
					}

					.container .content {
					position: absolute; /* Position the background text */
					top: 514; /* At the bottom. Use top:0 to append it to the top */
					background: rgb(0, 0, 0); /* Fallback color */
					background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
					color: #f1f1f1; /* Grey text */
					width: 100%; /* Full width */
					padding: 74px; /* Some padding */
					}
			
				
				.bd-placeholder-img {
					font-size: 1.125rem;
					text-anchor: middle;
					-webkit-user-select: none;
					-moz-user-select: none;
					user-select: none;
				}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
		.container .content {
			top: 514;
		}
      }
    </style>
	</head>
  <body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<img class="logo" src="images/logo.png" style="width:4%; margin-right:10px;"/>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li class="nav-item">
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a class=\"nav-link\" href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a class=\"nav-link\" href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a class=\"nav-link\" href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a>
				</li>
				<li class="nav-item">
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a class=\"nav-link\" href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a class=\"nav-link\" href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a class=\"nav-link\" href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<img src="images/turkish.jpg" style="width:120%; ">
		<div class="content">
			<h1>Welcome to Turkish Airlines </h1>
			<h3><small style="color:light-gray">Welcome to the skies with Turkish Airlines! We are dedicated to making your journey a memorable and comfortable one. </small></h3>
			<img src="images/boardingLogo.png"width="20%">
			<br>
			<br>

		<a href="login_page.php" class="btn btn-danger btn-lg" >Start Your Adventure</a>
	</div>
</div>
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Services</h1>
      <p class="fs-5 text-muted">Fly around the World with the best 5-star Airline in Europe to destinations such as Berlin, London, Dubai, New York and more </p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger" style="margin-left:10%;">
          <div class="card-header py-3 text-white bg-danger border-danger" >
            <h4 class="my-0 fw-normal">Paris</h4>
          </div>
          <div class="card-body">
		  <img src="images/paris1.jpg" width="85%">
            <h1 class="card-title pricing-card-title">€49<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
             <p>Paris! Experience the romance and charm of this stunning city, renowned for its beautiful architecture, rich history, and world-famous cuisine. </p>
            </ul>
			<a href="login_page.php" class="w-100 btn btn-lg btn-danger">Book Your Flight</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-white bg-danger border-danger" >
            <h4 class="my-0 fw-normal">New York</h4>
          </div>
          <div class="card-body">
		  <img src="images/newyork2.jpg" width="65%">
            <h1 class="card-title pricing-card-title">€129<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <p>"Explore the City that Never Sleeps - New York! Visit the bustling metropolis and experience the energy and excitement of this world-famous city.</p>
            </ul>
			<a href="login_page.php" class="w-100 btn btn-lg btn-danger">Book Your Flight</a>
          </div>
        </div>
      </div>
      <div class="col" >
        <div class="card mb-4 rounded-3 shadow-sm border-danger" style="margin-right:10%;">
          <div class="card-header py-3 text-white bg-danger border-danger">
            <h4 class="my-0 fw-normal">Dubai</h4>
          </div>
          <div class="card-body">
		  <img src="images/duabi2.jpg" width="70%">
            <h1 class="card-title pricing-card-title">€79<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <p>Book your trip with us today and experience the extravagance of Dubai like never before. Dubai! Immerse yourself in the glittering city, and breathtaking attractions. </p>
            </ul>
			<a href="login_page.php" class="w-100 btn btn-lg btn-danger">Book Your Flight</a>
          </div>
        </div>
      </div>
    </div>
	<div class="p-3 pb-md-4 bg-light  mx-auto text-center">
		<h1 class="display-4 fw-normal">Destinations</h1>
		<p class="fs-5 text-muted">Fly around the World with the best 5-star Airline in Europe to destinations such as Berlin, London, Dubai, New York and more </p>

		<div class="col"  >
        <div class="card mb-4 rounded-3 shadow-sm border-danger" style="margin-left:20%; width:60%">
          
          <div class="card-body" >
		  <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="images/adv2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="images/map.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="images/adv3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
			<br>		
			<a href="login_page.php" class="w-100 btn btn-lg btn-danger">Book Your Flight</a>
          </div>
        </div>
      </div>
	</div>
		<!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Links  -->
  <section style="padding-top: 5px;">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Trukish Airlines
          </h6>
          <p>
            This project is made for education purposes, for use in the Web Programming Course [CSS-501] at South East European University
          </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3"></i> Ataturk Airport, Turkey</p>
          <p><i class="fa fa-envelope me-3"> </i>jf29441@seeu.edu.mk</p>
		  <p><i class="fa fa-envelope me-3"></i>sa29249@seeu.edu.mk</p>
          <p><i class="fa fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fa fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://www.seeu.edu.mk/">South East European University</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>