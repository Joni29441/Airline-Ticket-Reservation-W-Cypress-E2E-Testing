<?php

    session_start();
    error_reporting(1);
  ?>

  <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Boarding Card</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <style>
          .header{
            background-color: #e81313;
            border-radius: 10px;
            width: 100%;
            height: 30%;
            padding: 15px;
            
          }
          .text
          {
            float: right;
            color:white;
            margin-top:45px;
            margin-right: 50px;
          }
          .barcode{
            display:flex;
            margin-left:15%;
          }
          a:hover{

            text-decoration: none;
            color: white;
          }
          </style>
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>

     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<img class="logo" src="images/logo.png" style="width:4%; margin-right:10px;"/>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class=" nav-link" href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li class="nav-item">
					<a class="nav-link" href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Print Ticket</a></li>
				<li class="nav-item">
					<a class="nav-link" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		</ul>
		</div>
	</nav> 
        
    </head>
    <body style="background-image:url('images/background.jpg')">
  <?php
$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr,flight_no,journey_date, class, booking_status, no_of_passengers, lounge_access, priority_checkin, insurance, payment_id, customer_id from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$flight_no= $n['flight_no'];
$journey_date= $n['journey_date'];
$class= $n['class'];
$booking_status= $n['booking_status'];
$no_of_passengers= $n['no_of_passengers'];
$lounge_access= $n['lounge_access'];
$priority_checkin= $n['priority_checkin'];
$insurance= $n['insurance'];
$payment_id= $n['payment_id'];
$customer_id= $n['customer_id'];




$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<div class="card" style="margin:50px 130px">
		<div class="shadow p-4 mb-3 bg-body rounded">
      <div class="header">
        <img src="images/boardingLogo.png" alt="" width="30%">
        <div class="text">
          <h2 style = "font-size:35px;">Boarding Pass</h2>
        </div>
      </div>
<br>

<div class="container" style="margin-top:70px; margin-left:35px;">
  <div class="row">
    <div class="col">
      <h3>Name: <?php echo ''. $row[2]. '   ' ?></h3>
      <h3>Age: <?php echo ''.$row[3] ?></h3>
      <h3>Gender: <?php echo ''.$row[4] ?></h3>
    </div>
  </div>
</div>

<div class="container" style="margin-top:30px; margin-left:35px;">
  <div class="row">
    <div class="col">
      <h4>Status: <?php echo $booking_status;?></h4>
      <h4>PNR : <?php echo $stname;?></h4>
        <h4>Flight Number: <?php echo $flight_no;?></h4>
        <h4>Date of Flight: <?php echo $journey_date;?></h4>
        <h4>Class: <?php echo $class;?> </h4>
        <h4>Payment ID: <?php echo $payment_id;?></h4>               
    </div>
    <div class="col">
      <h4>No. of Passengers: <?php echo $no_of_passengers;?></h4>
      <h4>Lounge Access: <?php echo $lounge_access;?></h4>
      <h4>Priority Check-In: <?php echo $priority_checkin;?></h4>
      <h4>Insurance: <?php echo $insurance;?></h4>
      <h4>Inflight Meal: <?php echo $row[5] ?></h4>
    </div>
  </div>
</div>         
<div class="barcode">
  <img src="images/barcode.png" style= "width: 70%;">
</div>      
              
                <br>
                <br>
               
                   <?php
                  
                  $result1 = mysqli_query($con,"SELECT * FROM passengers where pnr='".$_SESSION['user']."'");
                  $row1 = mysqli_fetch_array($result1)  ; 
                    
                   ?>
                 
        <?php
              }
        ?>

<div style="margin-left:40%">
  <input type="submit" id="print" class="toggle btn btn-danger" value="Print Boarding Card" onclick="printpage();">
</div>
<style>
     @media print {
      .print_hide{
        display:none;
      }
     }
   </style>
    </div>
</div>
<footer class="text-center text-lg-start bg-dark text-muted" >
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


                     