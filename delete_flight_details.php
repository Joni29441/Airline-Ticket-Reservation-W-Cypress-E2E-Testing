<?php
	session_start();
?>
<html>
	<head>
		<title>
			Delete Flight Schedule Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=submit] {
				background-color: red;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
				display: flex;
    			margin: auto;
				width: 40%;
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 30px;
			}
			.title{
				display: flex;
				margin: auto;
				border-bottom: solid 2.5px #e30404 ;
				width: 570px;
				margin-bottom: 20px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="css/bootstrap.css">
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
						<a class="nav-link" href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
					<li class="nav-item">
						<a class="nav-link" href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
					<li class="nav-item">
						<a class="nav-link" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
			</ul>
		</div>
	</nav>
	<div class="card" style="margin:50px 230px">
			<div class="shadow p-4 mb-1 bg-body rounded">
				<form action="delete_flight_details_form_handler.php" method="post">
					<h2 class="title">Enter The Flight Schedue To Be Deleted</h2>
					<?php
						if(isset($_GET['msg']) && $_GET['msg']=='success')
						{
							echo "<strong style='color:green; padding-left:20px;'>The Flight Schedule has been successfully deleted.</strong>
								<br>
								<br>";
						}
						else if(isset($_GET['msg']) && $_GET['msg']=='failed')
						{
							echo "<strong style='color:red; padding-left:20px;'>*Invalid Flight No./Departure Date, please enter again.</strong>
								<br>
								<br>";
						}
					?>
					<div class="row">
						<div class="col">
						<label for="formGroupExampleInput">Enter a Valid Flight Number</label>
							<input type="text" class="form-control" name="flight_no" required>
						</div>
						<div class="col">
						<label for="formGroupExampleInput">Enter the Departure Date</label>
							<input type="date" class="form-control" name="departure_date" required>
						</div>
					</div>
				<br>
				<br>
			<input type="submit" value="Delete" name="Delete">
		</form>
	</div>
</div>
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