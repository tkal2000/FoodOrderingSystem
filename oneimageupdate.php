<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Food Ordering System</title>
</head>
<body>
<?php
    session_start();
    include('connection.php');

    if(isset($_POST['fimgupdate']))
    {
        $fid=$_POST["fid"];
        $fimg=addslashes(file_get_contents($_FILES["fimg"]["tmp_name"]));
       
        if(!$conn->connect_error)
        {
            $sql="UPDATE food SET food_image='$fimg'  WHERE food_id='$fid';";

            if($conn->query($sql))
            {
                header('location:viewedit.php?msg=Updated Food Image Successfully');
            }
            else
            {
                header('location:viewedit.php?msg=Query Error');
            }
        }
        else
        {
            header('location:viewedit.php?msg=Connection Error');
        }
    }
?>

<?php
   
    if(isset($_GET['food_id']))
    {
        
        $fid=$_GET['food_id'];

        $sql="SELECT food_id,food_image FROM food WHERE food_id='$fid'";
        $result=$conn->query($sql);

        if($result->num_rows>0)
        {
            $row=$result->fetch_assoc();
            ?>
             <div class="container">
            <a href="viewedit.php"><button class="btn btn-danger" style="margin-top:20px;">Back</button></a>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="fields">
                 <input type="hidden" name="fid"  value="<?php echo $row['food_id'];?>"> 
                    <div class="input-field">
                        <label>Food Image</label>
                        <img src="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["food_image"]);?>" width="50px" height="50px">
                        <input type="file" name="fimg">
                    </div>
                </div>
                <input type="submit" name="fimgupdate" value="Update" class="btn btn-primary">
            </form>
        </div>
            <?php
        } 
    }
?>
</body>
</html>