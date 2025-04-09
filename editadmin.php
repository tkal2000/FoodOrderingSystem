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
        #dis{
            pointer-events: none; 
            background-color:rgb(194, 191, 191);
        }
        hr{
            border-radius:10px;
            color:#d90e69;
        }
    </style>
</head>
<body style="background-image: url('img/foodbackgroundimage.jpg');">
    <?php
        include('connection.php');
        session_start();
        $uname=$_SESSION["uname"];
    ?>
    <?php
       
        if(isset($_POST['adminupdate']))
        {
            $aid=$_POST["aid"];
            $aname=$_POST["aname"];
            $anic=$_POST["anic"];
            $aadd=$_POST["aadd"];
            $acno=$_POST["acno"];
            $adob=$_POST["adob"];
            $email=$_POST["email"];
            $pword=$_POST["pword"];
           
            if(!$conn->connect_error)
            {
                $sql="UPDATE admin set admin_id='$aid',a_full_name='$aname',a_nic='$anic',a_address='$aadd',
                a_contact_no='$acno',a_dob='$adob',a_email='$email',a_password='$pword'
                WHERE admin_id='$aid';";
            
                
                if($conn->query($sql))
                {
                    $sql2="UPDATE user_credintial set password='$pword'WHERE username='$email';";

                    if($conn->query($sql2))
                    {
                          echo "Updated Successfully";
                    }
                }
                else
                {
                    header('location:editadmin.php?msg=Query Error');
                }
            }
            else
            {
                header('location:editadmin.php?msg=Connection Error');
            }
        
        }
    ?>
    <?php
        if(!$conn->connect_error)
        {
            $sql="SELECT * FROM admin where a_email='$uname'";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                $row=$result->fetch_assoc();
                ?>
            <div class="container">
            <h5>Edit Profile</h5>
            <hr size="6px">
            <a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="fields">
						<div class="input-field">
							<label>Admin Id</label>
							<input type="text" name="aid"  value="<?php echo $row["admin_id"]; ?>" class="form-control">
						</div>
						<div class="input-field">
							<label>Name</label>
							<input type="text" name="aname" value="<?php echo $row["a_full_name"]; ?>" class="form-control">
						</div>
						<div class="input-field">
							<label>NIC</label>
							<input type="text" name="anic"  value="<?php echo $row["a_nic"]; ?>" class="form-control">
						</div>
						<div class="input-field">
							<label>Address</label>
							<textarea name="aadd" id="my-text"  class="form-control"><?php echo $row["a_address"]; ?></textarea>
						</div>
						<div class="input-field">
							<label>Contact No</label>
							<input type="number" name="acno"  value="<?php echo $row["a_contact_no"]; ?>" class="form-control">
						</div>
						<div class="input-field">
							<label>Date Of Birth</label>
							<input type="text" name="adob"  value="<?php echo $row["a_dob"]; ?>" class="form-control">
						</div>
                        <div class="input-field">
							<label>Email</label>
							<input type="email" name="email" id="dis" value="<?php echo $row["a_email"]; ?>" class="form-control">
						</div>
                        <div class="input-field">
							<label>Password</label>
							<input type="text" name="pword"  value="<?php echo $row["a_password"]; ?>" class="form-control">
						</div>
					</div>	
                            <input type="submit" name="adminupdate" value="Update" class="btn btn-primary">
                    </form>
	        </div>
    <?php
            }
        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>