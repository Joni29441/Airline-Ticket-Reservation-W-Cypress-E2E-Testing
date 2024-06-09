<html>
	<head>
		<title>
			Create New User Account
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
    			margin: 0px 135px
			}
			.center{
				margin-left: 30%;
				margin-top: 5%;
				
				
			}
			.last{
				margin-top: 10%;
				margin-left: 25%;
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
			<div class="navbar-nav" >
				<a class="nav-link"href="home_page.php"><i class="fa fa-home"></i>Home </a>
				<a class="nav-link"href="login_page.php"><i class="fa fa-ticket"></i>Book Tickets</a>
				<a class="nav-link"href="home_page.php"><i class="fa fa-plane"></i>About Us</a>
				<a class="nav-link"href="home_page.php"><i class="fa fa-phone"></i>Contact Us</a>
				<a class="nav-link "href="login_page.php"><i class="fa fa-sign-in"></i>Login</a>
			</div>
		</div>
	</nav>
	<div class="card" style="margin:50px 130px">
		<div class="shadow p-4 mb-1 bg-body rounded ">
			<div class="center">
			<img src="images/TurkishAirlineslogo.png" width="45%"><br><br>

			</div>
		<br>
		<hr>
		<img src="images/checkmark.png" width="15%" style="margin-left:40%;">
		<div class="center" style="margin-left:25%;">
			<h3 style="color:green">New User Was Successfully Registered!</h3>
		</div>
		<div class="last">
			<h3> Login into your Account to book your ticket</h3>
			<br>
			<br>
			<a href="login_page.php" class="btn btn-danger btn-lg" style="margin-left:17%" role="button" >Login To Your Account</a></div>
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
            This project is made for education purposes, for use in the Web Programming Course [CSS-501] at Sout East European University
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