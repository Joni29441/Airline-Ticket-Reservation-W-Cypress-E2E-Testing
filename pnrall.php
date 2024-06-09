<?php
session_start();

$con=mysqli_connect("localhost","root","","airline_reservation");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['pnr'];

 if($id!='')
 {
   $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
   $res=mysqli_fetch_row($query);
   $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
   $res0=mysqli_fetch_row($query0);
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
if($res0)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
 
 }
}
?>

<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
         <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

       
        <title>Find Booking</title>
        
        <style>
            .title{
				display: flex;
				margin: auto;
				border-bottom: solid 2.5px #e30404 ;
				width: 400px;
				margin-bottom: 25px;
			}
        </style>
    </head>
    <body  style="background-image:url('./images/inbg.jpg');" >
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<img class="logo" src="images/logo.png" style="width:4%; margin-right:10px;"/>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse">
			<div class="navbar-nav" >
				<a class="nav-link"href="home_page.php"><i class="fa fa-home"></i>Home </a>
				<a class="nav-link"href="login_page.php"><i class="fa fa-ticket"></i>Book Tickets</a>
				<a class="nav-link"href="home_page.php"><i class="fa fa-phone"></i>Contact Us</a>
				<a class=" nav-link "href="login_page.php"><i class="fa fa-sign-in"></i>Login</a>
			</div>
		</div>
	</nav>
    <div class="card" style="margin:50px 330px">
    <div class="shadow p-4 mb-1 bg-body rounded">
    <form id="index" action="pnrall.php" method="post">
                <div  id="divtop">
                    <center>
                       <br> <br><br>
                            <div id="dmain"  > 
                               <center><img src="./images/logo.png" width="180px" height="150px" ></center>
                                <br>
                                <h4 class="title">Enter PNR Code to find Your Booking</h4>
                                    <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 50px;" placeholder="Enter Your PNR Number"><br>
                                   
                                    <input type="submit" id="u_sub" name="u_sub" value="Check Booking" class="toggle btn btn-danger" style="width:150px; margin-left: 70px;"><br>      
                            </div>
                     </div>
               </div>
            </div>  
        </form> 
        
        
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
