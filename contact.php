<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    .contact{
        width: 100%;
        padding: 78px 0px;
        background-color: rgb(224, 219, 219);
    }
    .contact img{
        height: 300px;
        width: 300px;
        border-radius:25%;
    }
    .contact-text{
        width: 550px;
    }
    .main{
        width: 1120px;
        max-width: 95%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
</style>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <section class="contact">
        <div class="main">
            <img src="img/contact.jpg">
            <div class="contact-text">
            <h2><u>Contact Us</u></h2>
            <div class="row">
              <i class='bx bxs-phone'></i>
              <h6>+011-4598158</h6>
              <i class='bx bx-envelope'></i> 
              <h6>kepz@gmail.com</h6>
        </div>
          <i class='bx bxs-map'></i> 
          <h6>No.15,Kandy Road,Matale.</h6>
      <i class='bx bx-time'></i>
        <h6>Monday-Friday:10.00AM-10.00PM
        Saturday-Sunday:10.00AM-12.00PM</h6>     
        <br>
        <h6><u>FOLLOW ON US</u></h6>
        <i class='bx bxl-facebook'></i>
        <i class='bx bxl-instagram'></i>
        <i class='bx bxl-google-plus'></i>
        <i class='bx bxl-twitter'></i>
      </div>
</body>
</html>