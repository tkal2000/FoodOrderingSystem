<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    body{
        font-family: "Poppins", sans-serif;
    }
    img{
        width:100px;
        height:100px;
        border-radius:100%;
    }
</style>
</head>
<?php
        include('headeruser.php');
?>
<body style="background-color: rgb(220, 215, 241);">
    <?php
        session_start();
        include('connection.php');
        if(isset($_POST['updateorder']))
        {
            $update_quentity=$_POST['orderquentity'];
            $update_cid=$_POST['cartid'];

            $sql="UPDATE cart SET quantity='$update_quentity' WHERE cart_id='$update_cid'";
            $result=mysqli_query($conn,$sql);
            // echo "Updated";
            
        }
        if(isset($_GET['remove']))
        {
            $remove_id=$_GET['remove'];

            $sql="DELETE from cart WHERE cart_id='$remove_id'";
            $result=mysqli_query($conn,$sql);
            // echo "Deleted";
            
        }
        $uname=$_SESSION["uname"];
        if(!$conn->connect_error)
        {
            $notcomplete="Not Complete";

            $sql="SELECT * from cart where c_username='$uname' AND complete_not='$notcomplete'";
            $result=mysqli_query($conn,$sql);

            $total_users=mysqli_num_rows($result);
        }
    ?>
    <div class="container">
    <a href="foodlist.php"><button class="btn btn-success">Continue Shoppping</button></a>
        <a href="vieworder.php"><button class="btn btn-dark">Cart <?php echo $total_users;?></button></a>
        <!-- <form action="orderplace.php" method="post"> -->
        <div class="shopping-cart">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Your Shipping Cart ...</h2>
                        </div>
                        <div class="col-sm-6">
                            <img src="img/img5.JPG">
                        </div>
                    </div>
                </div>
            <table id="datatable" class="table table-striped table-hover">
                <thead>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total Price</th>
                    <th>Action</th>
                </thead>
                    <tbody>
                <?php
                    $total_price=0;
                    include('connection.php');

                    $uname=$_SESSION["uname"];
                    if(!$conn->connect_error)
                    {
                        $notcomplete="Not Complete";

                        $sql="SELECT * from cart where c_username='$uname' AND complete_not='$notcomplete'";

                            $result=$conn->query($sql);
                        
                            if($result->num_rows>0)
                            {
                                while($row=$result->fetch_assoc())
                                {
                ?>
                                <tr>
                                    <input type="hidden" name="foodid" value="<?php echo $row["food_id"]; ?>">
                                    <input type="hidden" name="uname" value="<?php echo $row["c_username"]; ?>">
                                    <input type="hidden" name="foodname" value="<?php echo $row["food_name"]; ?>">
                                    <input type="hidden" name="foodprice" value="<?php echo $row["price"]; ?>">
                                    <td><?php echo $row["food_name"]; ?></td>
                                    <td>Rs.<?php echo $row["price"]; ?>.00</td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="cartid" value="<?php echo $row["cart_id"]; ?>">
                                            <input type="number" name="orderquentity"  value="<?php echo $row["quantity"]; ?>">
                                            <input type="submit" name="updateorder" value="Update" class="btn btn-success">
                                        </form>
                                    </td>
                                    <td>Rs.<?php echo $sub_total_price=$row["price"] * $row["quantity"];?>.00</td>
                                    <td><a href="vieworder.php?remove=<?php echo $row["cart_id"]; ?>" class="btn btn-danger" style="color:#fff;" onclick="return confirm('Remove item from Order?');">Remove</a></td>
                                </tr>
                <?php
                    $total_price+=$sub_total_price;
                            }
                        }
                    }
                ?>
                <tr class="table-bottom">
                    <td colspan="3">Grand Total: Rs.<input type="number"  name="totalprice" value="<?php echo $total_price; ?>">.00</td>
                    
                </tr>
                    </tbody>
            </table>
            <form action="orderplace.php" method="post">
                <div class="cart-btn">
                    <input type="submit" value="Checkout" name="checkout" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>