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
        if(isset($_GET['food_id']))
        {
            session_start();
            include('connection.php');
            $fid=$_GET['food_id'];

            $sql="Select * from food where food_id='$fid'";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                $row=$result->fetch_assoc();
                {
                    ?>
                    <div class="container">
                        <?php
                            if(isset($_GET["msg"]))
                            {
                                echo "<h5>".$_GET['msg']."</h5>";
                            }
                        ?>
                        <header>Update Food Item</header>
                            <a href="viewedit.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a> 
                                <form action="foodupdate.php" method="post" enctype="multipart/form-data">
                                    <div class="fields">
                                        <input type="hidden" name="fid"  value="<?php echo $row['food_id'];?>">
                                        <div class="input-field">
                                            <label>Food Name</label>
                                            <input type="text" name="fname" placeholder="Food Name" value="<?php echo $row['food_name'];?>">
                                        </div>
                                        <div class="input-field">
                                            <label>Price</label>
                                            <input type="number" name="prc" placeholder="Price" value="<?php echo $row['price'];?>">
                                        </div>
                                        <div class="input-field">
                                            <label>Description</label>
                                            <textarea name="des" id="my-text" placeholder="Description" required><?php echo $row['description'];?></textarea>
                                        </div>
                                    </div>
                                        <input type="submit" name="fupdate" value="Update" class="btn btn-primary">
                                        <input type="reset" name="reset" value="Reset"  class="btn btn-dark">
                                        <a href="oneimageupdate.php?food_id=<?php echo $row['food_id']; ?>">Edit Image</a>
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
</body>
</html>
