<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="userlogin.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
        .container{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        include('connection.php');
    ?>
   <div>
   <?php
        include('headernew.php');
    ?>
   </div>
    <div class="container">
    <?php
		if(@isset($_GET["msg"]))
		{
			echo $_GET["msg"];
		}
	?>
    <?php
        if(isset($_SESSION['message']))
        {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong></strong> <?php echo $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            unset($_SESSION['message']);
        }
    ?>
    <h1>Hi
        <br> Welcome to <span class="edit"> kepz </span></h1>
        <div class="row content">
            <div class="col-md-6 md-3">
                <img src="img/admin.png" alt="image" style="border-radius:100%;">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text md-3" style="color:black;">Sign In</h3>
                <form  action="adminsignin.php"  method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pwrd" class="form-control" placeholder="Enter Your Password">  
                    <button class="btn btn-primary" name="login">Login</button>
                    <div class="form-group">
                        <a href="userregister.php"style="color:blue;">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>  
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>