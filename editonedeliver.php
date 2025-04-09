<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' rel='stylesheet'>
</head>
<body style="background-image: url('img/foodbackgroundimage.jpg');">
    <div class="container">
        <header>Edit Details</header>
        <a href="deliverorderview.php"><button class="btn btn-danger" style="margin-top:10px;">Back</button></a>
<form action="updateonedeliver.php" method="post">
<?php
        session_start();
        $uname=$_SESSION["uname"];
        include('connection.php');

            if(!$conn->connect_error)
            {
                $sql="SELECT * FROM deliver WHERE d_email='$uname'";
			    $result=$conn->query($sql);

                if($result->num_rows>0)
                {
                    $row=$result->fetch_assoc();
                    ?>
                    <div class="fields">
                            <input type="hidden" name="did" value="<?php echo $row["delivery_id"];?>">
                        <div class="input-field">
                            <label>NIC</label>
                            <input type="text" name="nic" value="<?php echo $row["d_nic"];?>">
                        </div>
                        <div class="input-field">
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $row["d_full_name"];?>">
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <textarea name="address" id="my-text" ><?php echo $row["d_address"];?></textarea>
                        </div>
                        <div class="input-field">
                            <label>Date Of Birth</label>
                            <input type="text" name="dob" value="<?php echo $row["d_dob"];?>">
                        </div>
                        <div class="input-field">
                            <label>Contact No</label>
                            <input type="number" name="cno" value="<?php echo $row["d_contact_no"];?>">
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email"  name="email" value="<?php echo $row["d_email"];?>">
                        </div>
                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" name="pwrd" value="<?php echo $row["d_password"];?>">
                        </div>  
                    <?php
                }
            }
    ?>
    <input type="submit" value="Save" name="save" class="btn btn-primary">
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