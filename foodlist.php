<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="list.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
        include('headeruser.php');
?>
    <?php
        include('connection.php');
        session_start();

        $uname=$_SESSION["uname"];

        if(isset($_POST['add_to_cart']))
        {
            $fid=$_POST["foodid"];
            $foodname=$_POST['foodname'];
            $foodprice=$_POST['foodprice'];
            $quentity=$_POST['quentity'];
            $notcomplete="Not Complete";

            $sql="insert into cart(food_id,c_username,food_name,price,quantity,complete_not)
                values('$fid','$uname','$foodname','$foodprice','$quentity','$notcomplete')";
                
            if($conn->query($sql))
            {
                session_start();
                $uname=$_SESSION["uname"];
                header('location:vieworder.php?msg=Product already added to the cart');
            }
        }
    ?>
    <div class="section-top">
        <div class="content">
            <h1>Welcome</h1>
          </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="heading">kepz Online Order!!!</div>
            <dic class="box-container">
                <?php
                   
                    include('connection.php');
                    if(!$conn->connect_error)
                    {
                        $sql="SELECT * from food";
                        $result=$conn->query($sql);
                        
                        if($result->num_rows>0)
                        {
                            while($row=$result->fetch_assoc())
                            {
                ?>
                                <form action="" method="post" class="box">
                                    <img src="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["food_image"]);?>" style="width:200px; height:200px;" alt="">
                                    <div class="name"><?php echo $row["food_name"];?></div>
                                    <div class="description"><?php echo $row["description"];?></div>
                                    <div class="price">Rs.<?php echo number_format ($row["price"]);?>.00</div>
                                    <input type="number" min="1" max="100" name="quentity" value="1">
                                    <input type="hidden" name="foodid" value="<?php echo $row["food_id"];?>">
                                    <input type="hidden" name="foodimage" value="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["food_image"]);?>">
                                    <input type="hidden" name="foodname" value="<?php echo $row["food_name"];?>">
                                    <input type="hidden" name="foodprice" value="<?php echo $row["price"];?>">
                                    <input type="submit" value="Add to Cart" name="add_to_cart" class="btn btn-primary">
                                </form>
                <?php
                            }
                        }
                    }
                ?>
            </dic>
        </div>
    </div>
</body>
</html>