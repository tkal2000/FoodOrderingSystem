<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>
<body style="background-image:url(img/foodbackgroundimage.jpg);">
	<div class="container">
		<header>Create Account</header>
		<a href="adminlogin.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a>
		<form action="usersignup.php" method="post">
			<div class="fields">
				<div class="input-field">
					<label>Full Name</label> 
					<input type="text" name="fname" placeholder="Full Name" required/>
				</div>
				<div class="input-field">
					<label>Address</label> 
					<input type="text" name="address" placeholder="Address" required/>
				</div>
				<div class="input-field">
					<label>Contact No</label> 
					<input type="number" name="cno" placeholder="Contact No" required/>
				</div>
				<div class="input-field">
					<label>Email</label> 
					<input type="email" name="uname" placeholder="Email" required/>
				</div>
				<div class="input-field">
					<label>Password</label> 
					<input type="password" name="pwrd" placeholder="Password" required/>
				</div>
			</div>
				<input type="submit" class="btn btn-primary" name="signup" value="Register">
				<input type="reset" class="btn btn-success" name="reset" value="Reset">
		</form>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>			
</body>
</html>