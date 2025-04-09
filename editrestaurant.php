<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		h5{
			color:red;
			text-align:center;
		}
	</style>
</head>
<body style="background-image: url(img/foodbackgroundimage.jpg);">
	<?php
        if(isset($_GET['restaurant_id']))
        {
            include('connection.php');
            $rid=$_GET['restaurant_id'];

            $sql="SELECT * from restaurant WHERE restaurant_id='$rid'";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                $row=$result->fetch_assoc();
                {
                    ?>
	<div class="container">
			<header>Edit Resturant Details</header>	
				<a href="restauranteditdelete.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a> 
					<form action="restaurantupdate.php" method="post" enctype="multipart/form-data">
						<div class="fields">
							<div class="input-field">
								<label>Restaurant Id</label>
								<input type="text" name="rid" placeholder="Restaurant Id" value="<?php echo $row["restaurant_id"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Restaurant Name</label>
								<input type="text" name="rname" placeholder="Restaurant Name" value="<?php echo $row["restaurant_name"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Bio</label>
								<input type="text" name="bio" placeholder="Bio" value="<?php echo $row["bio"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Restaurant Adddress</label>
								<input type="text" name="raddress" placeholder="Restaurant Adddress" value="<?php echo $row["restaurant_address"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Restaurant Email</label>
								<input type="text" name="remail" placeholder="Restaurant Email" value="<?php echo $row["restaurant_email"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Restaurant Contact No</label>
								<input type="number" name="rco" placeholder="Restaurant Contact No" value="<?php echo $row["restaurant_contact_no"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Availabale Time</label>
								<textarea name="rtime" id="my-text" placeholder="Availabale Time" class="form-control"><?php echo $row["restaurant_time_available"]; ?></textarea>
							</div>
						</div>	
								<input type="submit" name="resupdate" value="Update" class="btn btn-primary">
						</form>
	</div>
	<?php
                }
            }
            else
            {
                echo "No Result";
            }
        }
    ?>
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