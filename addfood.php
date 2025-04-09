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
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="styles.css">
	<style>
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
	<header>Add New Food Item</header>
	<a href="admindashboard.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a>
		<form action="foodsignup.php" method="post" enctype="multipart/form-data">
			<div class="fields">
				<div class="input-field">
					<label>Food Name</label>
					<input type="text" name="fname" placeholder="Food Name" required/>
				</div>
				<div class="input-field">
					<label>Price</label>
					<input type="number" name="prc" placeholder="Price" required/>
				</div>
				<div class="input-field">
					<label>Description</label>
					<textarea name="des" id="my-text" placeholder="Description" required></textarea>
				</div>
				<div class="input-field">
					<label>Food Image</label>
					<input type="file" name="fimg" placeholder="Food Image" required/>
				</div>
			</div>
				<input type="submit" class="btn btn-primary" name="add" value="Add Food">
				<input type="reset" class="btn btn-success" name="reset" value="Reset">
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
</body>
</html>
