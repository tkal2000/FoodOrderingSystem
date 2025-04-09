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
        if(isset($_GET['delivery_id']))
        {
            include('connection.php');
            $did=$_GET['delivery_id'];

            $sql="SELECT * from deliver WHERE delivery_id='$did'";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                $row=$result->fetch_assoc();
                {
                    ?>
	<div class="container">
			<header>All Deliver Details</header>	
				<a href="viewdeliver.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a> 
					<form action="updatedeliver.php" method="post" enctype="multipart/form-data">
						<div class="fields">
							<div class="input-field">
								<label>Deliver Id</label>
								<input type="text" name="did"  value="<?php echo $row["delivery_id"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Name</label>
								<input type="text" name="dname" value="<?php echo $row["d_full_name"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>NIC</label>
								<input type="text" name="dnic"  value="<?php echo $row["d_nic"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Address</label>
								<textarea name="dadd" id="my-text"  class="form-control"><?php echo $row["d_address"]; ?></textarea>
							</div>
							<div class="input-field">
								<label>Contact No</label>
								<input type="number" name="dcno"  value="<?php echo $row["d_contact_no"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Gender</label>
								<input type="text" name="dgen"  value="<?php echo $row["d_gender"]; ?>" class="form-control">
							</div>
                            <div class="input-field">
								<label>Date Of Birth</label>
								<input type="date" name="ddb"  value="<?php echo $row["d_dob"]; ?>" class="form-control">
							</div>
                            <div class="input-field">
								<label>Roll Of The Employee</label>
								<input type="text" name="dre"  value="<?php echo $row["roll_of_the_employee"]; ?>" class="form-control">
							</div>
                            <div class="input-field">
								<label>Email</label>
								<input type="email" name="de"  value="<?php echo $row["d_email"]; ?>" class="form-control" disabled>
							</div>
                            <div class="input-field">
								<label>Qualification</label>
								<textarea name="dq" id="my-text" class="form-control"><?php echo $row["d_qualification"]; ?></textarea>
							</div>
                            <div class="input-field">
								<label>Registration Date</label>
								<input type="date" name="drd"  value="<?php echo $row["d_registration_date"]; ?>" class="form-control">
							</div>
						</div>	
                            <input type="submit" name="deliverupdate" value="Update" class="btn btn-primary">
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