<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		<style>
			.background{
				background-color: #e5e5e5;
				background-image: url('images/background.jpg');
			}
			input {
				
    			border: 4px solid #e30404;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #e30404;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" href="css\styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</head>
	<body class="background">
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
				<a class="disabled nav-link "href="login_page.php"><i class="fa fa-sign-in"></i>Login</a>
			</div>
		</div>
	</nav>
	<br>
	<br>
	<br>
	<section class="vh-100 gradient-custom">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card bg-dark text-white" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center">
						<div class="mb-md-5 mt-md-4 pb-5">
							<form class="float_form" action="login_handler.php" method="POST">
							<img class="logo" src="images/logo.png" style="width:30%; margin-bottom:30px;"/>
								<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
								<div class="form-outline form-white mb-4">
									<input type="text" name="username" placeholder="Enter your username" required><br><br>
								</div>
								<div class="form-outline form-white mb-4">
									<input type="password" name="password" placeholder="Enter your password" required><br><br>
								</div>
								<strong>User Type:</strong>
								<br>
			  					<br>
									Customer <input type='radio' name='user_type' value='Customer' checked/> 
									Administrator <input type='radio' name='user_type' value='Administrator'/>
									<br>
									<br>
								<?php
									if(isset($_GET['msg']) && $_GET['msg']=='failed')
									{
										echo "<br>
										<strong style='color:red'>Invalid Username/Password</strong>
										<br><br>";
									}
								?>
									<input type="submit" name="Login" value="Login">
								</div>
							</form>
							<div>
								<p class="mb-0">Don't have an account? <a href="new_user.php" class="text-white-50 fw-bold">Sign Up</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<br>
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
            This project is made for education purposes, for use in the Web Programming Course [CSS-501] at South East European University
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