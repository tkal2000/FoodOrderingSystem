<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Food Ordering System</title>

  </head>
  <body>
      <?php
        include('header.php');
      ?>
    
  <div class="container banner text-center">
  <?php
		if(isset($_GET["msg"]))
		{
			echo"<h2 style='red' align='center'>".$_GET["msg"]."</h2>";
		}
	?>
    <div class="row">
      <div class="col-md-6">
        <img src="img/Burger.jpg">
      </div>
      <div class="col-md-6">
        <h1>Are You Hungry...?</h1><p> &#128528; &#127789; &#127829;</p>
        <br><h2>Don't wait</h2> <br><h3>Let's Start to Order Food Now.</h3>
      
        <button type="button"  class="btn btn-danger"><a href="adminlogin.php" class="nav-link">Order Now </a></button>
      </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-3 footer">
      <i class='bx bxs-phone'></i>
      <h6>+011-4598158</h6>
     
      <div class="footer-text">
        <i class='bx bx-envelope'></i> 
        <h6>kepz@gmail.com</h6>
      </div>
    </div>
    <div class="col-md-3 footer">
      <i class='bx bxs-map'></i> 
      <div class="footer-text">
        <h6>No.15,Kandy Road,Matale.</h6>
      </div>
    </div>
    <div class="col-md-3 footer">
    <i class='bx bx-time'></i>
      <div class="footer-text">
        <h6>Monday-Friday:10.00AM-10.00PM
        Saturday-Sunday:10.00AM-12.00PM</h6>     
      </div>
    </div>
    <div class="col-md-3 footer">
      <div class="social-icon">
        <h6>FOLLOW ON US</h6>
        <i class='bx bxl-facebook'></i>
        <i class='bx bxl-instagram'></i>
        <i class='bx bxl-google-plus'></i>
        <i class='bx bxl-twitter'></i>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>