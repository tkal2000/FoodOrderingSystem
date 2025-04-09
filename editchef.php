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
</head>
<body style="background-image: url(img/foodbackgroundimage.jpg);">
	<?php
        if(isset($_GET['emp_id']))
        {
            include('connection.php');
            $cid=$_GET['emp_id'];

            $sql="SELECT * from chef WHERE emp_id='$cid'";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                $row=$result->fetch_assoc();
                {
                    ?>
	<div class="container">
			<header>All Chef Details</header>	
				<a href="viewchef.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a> 
					<form action="updatechef.php" method="post" enctype="multipart/form-data">
						<div class="fields">
							<div class="input-field">
								<label>Chef Id</label>
								<input type="text" name="chid"  value="<?php echo $row["emp_id"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Name</label>
								<input type="text" name="chname" value="<?php echo $row["e_full_name"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>NIC</label>
								<input type="text" name="chnic"  value="<?php echo $row["e_nic"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Address</label>
								<textarea name="chadd" id="my-text"  class="form-control"><?php echo $row["e_address"]; ?></textarea>
							</div>
							<div class="input-field">
								<label>Contact No</label>
								<input type="number" name="chcno"  value="<?php echo $row["e_contact_no"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Gender</label>
								<input type="text" name="chgen"  value="<?php echo $row["e_gender"]; ?>" class="form-control">
							</div>
                            <div class="input-field">
								<label>Date Of Birth</label>
								<input type="date" name="chdb"  value="<?php echo $row["e_dob"]; ?>" class="form-control">
							</div>
                            <div class="input-field">
								<label>Roll Of The Employee</label>
								<input type="text" name="chre"  value="<?php echo $row["roll_of_the_employee"]; ?>" class="form-control">
							</div>
                            <div class="input-field">
								<label>Email</label>
								<input type="email" name="che"  value="<?php echo $row["e_email"]; ?>" class="form-control" disabled>
							</div>
                            <div class="input-field">
								<label>Qualification</label>
								<textarea name="chq" id="my-text" class="form-control"><?php echo $row["qualification"]; ?></textarea>
							</div>
                            <div class="input-field">
								<label>Registration Date</label>
								<input type="date" name="chrd"  value="<?php echo $row["registration_date"]; ?>" class="form-control">
							</div>
						</div>	
                            <input type="submit" name="chefupdate" value="Update" class="btn btn-primary">
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