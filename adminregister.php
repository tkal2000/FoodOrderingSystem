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
<body style="background-image: url('img/foodbackgroundimage.jpg');">
	<div class="container">
		<header>Create Account</header>
		<a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
    <form action="adminsignup.php" method="post" enctype="multipart/form-data">
		<div class="fields">
			<div class="input-field">
				<label>Full Name</label>
				<input type="text" name="fname" placeholder="Full Name" required/>
			</div>
			<div class="input-field">
				<label>NIC</label>
				<input type="text" name="nic" placeholder="NIC" required/>
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
				<label>Date Of Birth</label>
				<input type="date" name="dob" placeholder="Date Of Birth" required/>
			</div>
			<div class="input-field">
				<label>Email</label>
				<input type="email" name="uname" placeholder="Email" required/>
			</div>
			<div class="input-field">
				<label>Password</label>
				<input type="password" name="pwrd" placeholder="Password" required/>
			</div>
			<div class="input-field">
				<label>Profile Photo</label>
				<input type="file" name="img" placeholder="Profile Photo">
			</div>
			<div class="input-field">
				<label>Roll of the Employee</label>
				<input type="text" name="admin"  placeholder="Admin" required/>
			</div>
		</div>
			<input type="submit" class="btn btn-primary" name="signup" value="Register">
			<input type="reset" class="btn btn-success" name="reset" value="Reset">	
	</form>
</div>
</body>
</html>