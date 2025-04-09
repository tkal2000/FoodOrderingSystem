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
        if(isset($_GET['supplier_id']))
        {
            include('connection.php');
            $sid=$_GET['supplier_id'];

            $sql="SELECT * from supplier WHERE supplier_id='$sid'";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                $row=$result->fetch_assoc();
                {
                    ?>
	<div class="container">
			<header>All Supplier Details</header>	
				<a href="viewsupplier.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a> 
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="fields">
							<div class="input-field">
								<label>Supplier Id</label>
								<input type="text" name="sid"  value="<?php echo $row["supplier_id"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Name</label>
								<input type="text" name="sname" value="<?php echo $row["s_full_name"]; ?>" class="form-control">
							</div>
							<div class="input-field">
								<label>Contact No</label>
								<input type="number" name="scno"  value="<?php echo $row["s_contact_no"]; ?>" class="form-control">
							</div>
                            <div class="input-field">
								<label>Email</label>
								<input type="email" name="se"  value="<?php echo $row["s_email"]; ?>" class="form-control">
							</div>
						</div>	
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