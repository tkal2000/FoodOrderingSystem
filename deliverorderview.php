<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' rel='stylesheet'>
</head>
<body style="background-color: rgb(220, 215, 241);">
    <?php
        session_start();
        $uname=$_SESSION["uname"];
    ?>
    <?php
        include('headerdeliver.php');
    ?>
       <?php
    
        include('connection.php');
        if(isset($_POST["ordercomplete"]))
        {
            $oid=$_POST["oid"];
            $cuname=$_POST["cuname"];
            $status="Complete";
            $paid="Paid";

            if(!$conn->connect_error)
            {
                $sql="UPDATE orders set order_status='$status',payment='$paid' WHERE order_id='$oid';";

                if($conn->query($sql))
                {
                    $sql1="UPDATE cart set complete_not='$status' WHERE c_username='$cuname';";

                    if($conn->query($sql1))
                    {
                        echo "<script>window.location.href='deliverorderview.php?msg=Updated data Successfully';</script>";
                    }
                }
            }
        }
    ?>
    <form action="#" method="post">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Customer Order Details</h2>
                </div>
            </div>
        </div>
    <table id="datatable" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Contact No</th>
                <th>Food</th>
                <th>Price</th>
                <th>Date</th>
                <th>Paid/Not Paid</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $Pending="Pending";
                if(!$conn->connect_error)
                {
                    $sql="SELECT * FROM orders WHERE deliver_email='$uname' AND order_status='$Pending'";

                    $result=$conn->query($sql);
                        
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
             ?>
                            <tr>
                                <input type="hidden" value="<?php echo $row["order_id"]; ?>" name="oid">
                                <input type="hidden" value="<?php echo $row["c_email"]; ?>" name="cuname">
                                <td><?php echo $row["order_id"]; ?></td>
                                <td><?php echo $row["c_full_name"]; ?></td>
                                <td><?php echo $row["c_address"]; ?></td>
                                <td><?php echo $row["c_contact_no"]; ?></td>
                                <td><?php echo $row["total_food"]; ?></td>
                                <td>Rs.<?php echo $row["total_price"]; ?>/=</td>
                                <td><?php echo $row["order_datetime"]; ?></td>
                                <td><?php echo $row["payment"]; ?></td>
                                <td><button type="submit" class="btn btn-danger" name="ordercomplete">Complete Order</button></td>
                            </tr>
                <?php
                            }
                        }
                        else
                        {
                            echo "No orders Now";
                        }
                    }
                ?>
        </tbody>
    </table>
    </form>
</body>
</html>