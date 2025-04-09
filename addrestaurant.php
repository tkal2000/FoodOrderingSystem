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
	<style>
		.container a button{
			margin-top:10px;
		}
		h5{
			color:red;
			text-align:center;
		}
	</style>
</head>
<body style="background-image:url(img/foodbackgroundimage.jpg);">	
	<div class="container">
	<?php
        if(isset($_GET["msg"]))
        {
            echo "<h5>".$_GET['msg']."</h5>";
        }
    ?>
		<header>Add Resturant Details</header>
		<a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
			<form action="restaurantsignup.php" method="post" enctype="multipart/form-data">
				<div class="fields">
					<div class="input-field">
						<label>Restaurant Id</label>
						<input type="text" name="rid" placeholder="Restaurant Id" class="form-control" required>
					</div>
					<div class="input-field">
						<label>Name</label>
						<input type="text" name="rname" placeholder="Restaurant Name" class="form-control" required>
					</div>
					<div class="input-field">
						<label>Restaurant Logo</label>
						<input type="file" name="rlogo" placeholder="Restaurant Logo" class="form-control" required>
					</div>
					<div class="input-field">
						<label>Bio</label>
						<input type="text" name="bio" placeholder="Bio" class="form-control" required>
					</div>
					<div class="input-field">
						<label>Restaurant Adddress</label>
						<input type="text" name="raddress" placeholder="Restaurant Adddress" class="form-control" required>
					</div>
					<div class="input-field">
						<label>Restaurant Email</label>
						<input type="email" name="remail" placeholder="Restaurant Email" class="form-control" required>
					</div>
					<div class="input-field">
						<label>Restaurant Contact No</label>
						<input type="number" name="rco" placeholder="Restaurant Contact No" class="form-control" required>
					</div>
					<div class="input-field">
						<label>Availabale Time</label>
						<textarea name="rtime" id="my-text" placeholder="Availabale Time" class="form-control" required></textarea>
					</div>
				</div>
					<input type="submit" name="add_restaurant" value="Add Restaurant Details" class="btn btn-primary">
					<input type="reset" name="reset" value="Reset" class="btn btn-dark">
			</form>
	</div>
<script>
	const myText = document.getElementById('my-text');
		myText.style.cssText =`height:${myText.scrollHeight}px;overflow-y:hidden`;

		myText.addEventListener("input", function(){
			this.style.height="auto";
			this.style.height=`${this.scrollHeight}px`;
		});
</script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>