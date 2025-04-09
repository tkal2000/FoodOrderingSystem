<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
        body{
            background-color: rgb(220, 215, 241);
        }
        .container h1
        {
            text-align:center;
            font-size:50px;
            margin-top:50px;
        }
        .container p{
            text-align:center;
            font-family: "Poppins", sans-serif;
        }
        .container .btn{
            margin-left:120px;
            margin-top:40px;
        }
        .container img{
            width:250px;
            height:50px;
            margin-left:400px;
        }
        .container h4{
            text-align:center;
        }
        .container button{
            width:100px;
        }
        .buttonActive
        {
            background-color: #1E78AB;
            border: 1px solid #1E78AB;
            color: #fff;
        }
        .buttonInactive
        {
            background-color: #fff;
            border: 1px solid #1E78AB;
            color: #1E78AB;
        }
        .display-order{
            max-width:500px;
            background-color: white;
            border-radius: .5rem;
            text-align: center;
            padding: 1.5rem;
            margin: 0 auto;
            margin-bottom: 5rem;
            box-shadow: #707070;
            border: #000000;
    }
    .display-order span{
        display: inline-block;
        border-radius: .5rem;
        background-color: #adbcba;
        padding: 2.5px;
        color: #000000;
    }
    .checkout-form form{
        padding: 2rem;
        border-radius: .5rem;
        background-color:rgb(224, 224, 224);
        color:#aca5a5;
    }
    .checkout-form form .flex{
        display:flex;
        flex-wrap:wrap;
        gap:1.5rem;
    }
    .checkout-form form .flex .inputbox input{
        width:100%;
        background-color: white;
        font-size: 15px;
        color: #000000;
        border-radius:10px;
        margin: 5px;
        padding: 10px;
        text-transform: none;
        border: #2e2e2e;
    } 
    </style>
</head>
<body>
    <div class="container">
        <div>
        <a href="vieworder.php"><button class="btn btn-dark">Go to Back Cart</button></a>
        </div>
        <div class="display-order">
        <?php
            session_start();
            include('connection.php');
            $uname=$_SESSION["uname"];

            $grand_total=0;
            if(!$conn->connect_error)
            {
                $notcomplete="Not Complete";

                $sql="SELECT * from cart where c_username='$uname' AND complete_not='$notcomplete'";
                $result=$conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        $foodname[]=$row["food_name"].'('.$row["quantity"].')';
                        if(($row["price"]) && ($row["quantity"]))
                        {
                            $total_price= (int)$row["price"] * (int)$row["quantity"];
                            $grand_total+= $total_price;
                        }
                        ?>
                        <span><?php echo  $row["food_name"].'('.$row["quantity"].')';?></span>
                        <?php
                    }
                    ?>
                    <span style="width:100%;background-color:#36e7be;">Grand Total:   Rs.<?php echo $grand_total; ?>/=</span>
                    <?php
                }
            }
            $total_food= implode(', ',$foodname);

            if(isset($_POST["submit"]))
            {
                
                $fname=$_POST["fname"];
                $address=$_POST["address"];
                $cno=$_POST["cno"];
                $email=$_POST["email"];
                $payment="Paid";
                $assign="Not Assign";
                $ostatus="Not Complete";
                $activity="False";

                if(!$conn->connect_error)
                {
                    $sql="INSERT INTO orders(c_full_name,c_address,c_contact_no,c_email,total_food,total_price,payment,assign_deliver,deliver_email,order_status,activity)
                    VALUES('$fname','$address','$cno','$email','$total_food','$grand_total','$payment','$assign','$assign','$ostatus','$activity')";

                    if($conn->query($sql))
                    {
                        header('location:ordercomplete.php?msg=Successfully Added');
                    }
                }
            } 
            
            if(isset($_POST["cash"]))
            {
                $fname=$_POST["fname"];
                $address=$_POST["address"];
                $cno=$_POST["cno"];
                $email=$_POST["email"];
                $payment="Not Paid";
                $assign="Not Assign";
                $ostatus="Not Complete";
                $activity="False";
                 
                if(!$conn->connect_error)
                {
                    $sql="INSERT INTO orders(c_full_name,c_address,c_contact_no,c_email,total_food,total_price,payment,assign_deliver,deliver_email,order_status,activity)
                    VALUES('$fname','$address','$cno','$email','$total_food','$grand_total','$payment','$assign','$assign','$ostatus','$activity')";

                    if($conn->query($sql))
                    {
                        header('location:ordercomplete.php?msg=Successfully Added');
                    }
                    else
                    {
                        echo "Error";
                    }
                }
            }
        ?>
        </div>
        <?php
            if(!$conn->connect_error)
            {
                $sql="SELECT * from customer where c_email='$uname'";

                $result=$conn->query($sql);

                if($result->num_rows>0)
                {
                    $row=$result->fetch_assoc();
                    ?>
                    
                    <div class="checkout-form">
                    <form action="" method="post">
                    <div class="flex">
                        <div class="inputbox">
                            <span>Full Name</span>
                            <input type="text" name="fname" value="<?php echo $row["c_full_name"];?>">
                        </div>
                        <div class="inputbox">
                            <span>Address</span>
                            <input type="text" name="address" value="<?php echo $row["c_address"];?>">
                        </div>
                        <div class="inputbox">
                            <span>Contact No</span>
                            <input type="number" name="cno" value="<?php echo $row["c_contact_no"];?>">
                        </div>
                        <div class="inputbox">
                            <span>Email</span>
                            <input type="email" name="email" value="<?php echo $row["c_email"];?>">
                        </div>
                    </div>
                    </div>
                    <?php
                }
            }
        ?>
        <div class="jumbotron">
            <h1>Choose Your Payment Option</h1>
        </div>
           <p>Including all service charges. (No delivery charges applied)</p>
           <img src="img/payment.png">
        <div class="btn">
            <a href="#"><button class="btn btn-success" id="pay">Pay Online</button></a>
            <a href="#">
            <input type="submit" name="cash" class="btn btn-danger" value="Cash on Delivery">    
            </a>
        </div>
        <div class="jumbotron" >
            <h1>Online Payment</h1>
            <h4>Enter Your Payment Details</h4>
        </div>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>Credit Card Number</label>
        </div>
        <div class="row" id="#tab">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" require>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" require>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" require>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" require>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>Expiry Year</label>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>Expiry Month</label>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>CCV</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <input type="number" class="form-control" placeholder="YY">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <input type="text" class="form-control" placeholder="MM">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <input type="text" class="form-control" placeholder="CCV">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            
        <a href="#">
            <input type="submit" value="Pay Now" name="submit" class="btn btn-success"></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <button class="btn btn-danger" > Cancel</button>
        </div>
    </div>
    </div>
    </form>
</body>
</html>




