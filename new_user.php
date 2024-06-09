<html>
	<head>
		<title>
			Create New User Account
		</title>
		<style>
			input {
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 135px
			}
			.title{
				display: flex;
				margin: auto;
				border-bottom: solid 2.5px #e30404 ;
				width: 410px;
				margin-bottom: 20px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css"/>

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
					<a class="nav-link" href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Print Ticket</a></li>
				<li class="nav-item">
					<a class="nav-link" href="customer_homepage.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li class="nav-item">
					<a class="nav-link" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		</ul>
		</div>
	</nav>
		<br>
		<div class="card" style="margin:50px 130px">
			<div class="shadow p-4 mb-1 bg-body rounded">
				<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
					<h2 class="title"><i class="fa fa-user-plus" aria-hidden="true"></i> Create Your New Account</h2>
					<br>		
								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label">Enter a Valid Username</label>
									<input type="text" class="form-control" name="username" required placeholder="Your Username Goes Here">
								</div>
								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label">Enter Your Password</label>
									<input type="password" class="form-control" name="password" required placeholder="Your Password Goes Here">
								</div>
								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label">Enter Your Email</label>
									<input type="text" class="form-control" name="email" required placeholder="Your Email Goes Here">
								</div>
								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label">Enter Your Name</label>
									<input type="text" class="form-control" name="name" required placeholder="Your Name Goes Here">
								</div>
								<div class="mb-3">
									<label for="formGroupExampleInput" class="form-label">Enter Your Phone Number</label>
									<input type="text" class="form-control" name="phone_no" required placeholder="Your Phone Number Goes Here">
								</div>
								<div class="mb-3">
									<label for="formGroupExampleInput2" class="form-label">Enter Your Address</label>
									<input type="text" class="form-control" name="address" required placeholder="Address Goes Here">
								</div>
								<br>
								<input type="submit" value="Submit" name="Submit" style="background-color: red;">
								<br>
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