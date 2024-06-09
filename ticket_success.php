<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			.title{
				display: flex;
				margin: auto;
				border-bottom: solid 2.5px #e30404 ;
				width: 320px;
				margin-bottom: 25px;
			}
		
			h2{
				text-align: center;
				color:green;
			}
			h3{
				margin: 4%;
			}
			.cent{
				display: flex;
				margin: auto;
			}
			.buttons{
				display: grid;
				place-items: center;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
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
					<a class="nav-link" href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li class="nav-item">
					<a class="nav-link" href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li class="nav-item">
					<a class="nav-link" href="customer_homepage.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li class="nav-item">
					<a class="nav-link" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		</ul>
		</div>
	</nav>
	<div class="card" style="margin:50px 230px">
		<div class="shadow p-4 mb-1 bg-body rounded">
			<div class="center">
		<h2 >Your Booking was Successful</h2>
		</div>
		<img style="margin-left:41%" src="images/checkmark.png" width="15%">
			
		<div style="margin-top:16%;">
			<h3>Your tickets have been booked successfully</h3>
			<br>
		<h3>Your payment of &#x20AC; <?php echo $_SESSION['total_amount']; ?> has been received </h3>
		<br>
		<h3>Your PNR is <strong><?php echo $_SESSION['pnr'];?></strong></h3>
		</div>

		<div class="buttons" style="margin-top:20%;">
			<div class="row">
			<div class="col">

			<a href="pnr.php" class="btn btn-danger" role="button" aria-pressed="true">Check Boarding Pass</a>
			<a href="#" class="btn btn-danger" role="button" aria-pressed="true">Go to Home Page</a>
			</div>
			</div>

	</div>
				
	</div>
	</div>
				<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted" style="margin-top:14%">
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
            This project is made for education purposes, for use in the Web Programming Course [CSS-501] 
          </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3"></i> Ataturk Airport, Turkey</p>
          <p>
            <i class="fa fa-envelope me-3"></i>
            info@example.com
          </p>
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