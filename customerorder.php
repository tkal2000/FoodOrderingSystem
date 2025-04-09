<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-image:url(img/foodbackgroundimage.jpg);">
    <?php
        include('connection.php');
        if(isset($_POST["save"]))
        {
            $deliver=$_POST["deliver"];
            $oid=$_POST["oid"];
            $ostatus="Pending";
            $dname=$_POST["dname"];

            if(!$conn->connect_error)
            {
                $sql="UPDATE orders set assign_deliver='$dname',order_status='$ostatus',deliver_email='$deliver' WHERE order_id='$oid';";

                if($conn->query($sql))
                {
                    header('location:admindashboard.php?msg=Updated data Successfully');
                }
            }
        }
    ?>
    <div class="container">
        <header>Customer Order Details</header>
        <a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
    <form action="#" method="post">
    <?php
        
        if(isset($_GET["order_id"]))
        {
            $oid=$_GET["order_id"];

            if(!$conn->connect_error)
            {
                $sql="SELECT * FROM orders WHERE order_id='".$oid."';";
			    $result=$conn->query($sql);

                if($result->num_rows>0)
                {
                    $row=$result->fetch_assoc();

                    ?>
                    <div class="fields">
                        <div class="input-field">
                            <label>Order Id</label>
                            <input type="text" name="oid" value="<?php echo $row["order_id"];?>">
                        </div>
                        <div class="input-field">
                            <label>Customer Name</label>
                            <input type="text" value="<?php echo $row["c_full_name"];?>">
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" value="<?php echo $row["c_address"];?>">
                        </div>
                        <div class="input-field">
                            <label>Contact No</label>
                            <input type="number" value="<?php echo $row["c_contact_no"];?>">
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" value="<?php echo $row["c_email"];?>">
                        </div>
                        <div class="input-field">
                            <label>Food Items</label>
                            <textarea><?php echo $row["total_food"];?></textarea>
                        </div>
                        <div class="input-field">
                            <label>Price</label>
                            <input type="number" value="<?php echo $row["total_price"];?>">
                        </div>
                        <div class="input-field">
                            <label>Order Date</label>
                            <input type="text" value="<?php echo $row["order_datetime"]?>">
                        </div>
                        <div class="input-field">
                            <label>Paid/Not Paid</label>
                            <input type="text" value="<?php echo $row["payment"];?>">
                        </div>
                        <div class="input-field">
                            <label>Assign Deliver Boy</label>
                            <select name="deliver" class="form-control" onchange="getDeliver(this.value)" required>
                                <?php
                                    $sql="SELECT d_email,d_full_name FROM deliver;";
                                    $result=$conn->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            ?>
                                            <option value="" disabled selected hidden>Select Deliver Name</option>
                                            <option value="<?php echo $row['d_email'];?>"><?php echo $row['d_full_name'];?></option>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <option>empty</option>
                                        <?php
                                    }
                                ?>
                            </select>
                            <div id="dname">

                            </div>
                        </div>
                    </div>
                        <input type="submit" value="Save" name="save" class="btn btn-primary">
                    <?php
                }
            }
        }
    ?>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>