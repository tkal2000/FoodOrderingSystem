<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="administrator.css">
   
</head>
<body>
    <div class="values">
        <div class="val-box">
        <i class="fa-solid fa-cart-shopping"></i>
            <div>
                <?php 
//automatically get DATE & TIME----
        
        if(!$conn->connect_error)
        {
            $assign="Not Assign";
            $date=date('d-M-Y');
            $fullcount=0;
            $sql="SELECT order_datetime from orders WHERE assign_deliver='$assign'";

            $result=mysqli_query($conn,$sql);
            
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $timestamp=$row['order_datetime'];
                    $date2=date('d-M-Y',strtotime($timestamp));
                    
                    if($date==$date2)
                    {
                        $count=count((array)$date2);
                        $fullcount+=$count;
                    }
                    // else
                    // {
                    //     echo "0";
                    // }
                }
                echo  $fullcount;
            }
        }
        ?>
                <span>Orders</span>
            </div>
        </div>
        <div class="val-box">
        <i class="fa-solid fa-clock"></i>
            <div>
                <!--automatically get pending data in DATE--->
        
        <?php
        if(!$conn->connect_error)
        {
            
            $date=date('d-M-Y');
            $fullcount=0;
            $sql="SELECT order_datetime from orders WHERE order_status='Pending'";

            $result=mysqli_query($conn,$sql);

            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $timestamp=$row['order_datetime'];
                    $date2=date('d-M-Y',strtotime($timestamp));
                    
                    if($date==$date2)
                    {
                        $count=count((array)$date2);
                        $fullcount+=$count;
                    }
                    // else
                    // {
                    //     echo "0";
                    // }
                }
                echo  $fullcount;
            }

        }
        ?>
                <span>Pending</span>
            </div>
        </div>
        <div class="val-box">
        <i class="fa-sharp fa-solid fa-circle-check"></i>
            <div>
                 <!--automatically get pending data in DATE--->
      
        <?php
        if(!$conn->connect_error)
        {
            $date=date('d-M-Y');
            $fullcount=0;
            $sql="SELECT order_datetime from orders WHERE order_status='Complete'";

            $result=mysqli_query($conn,$sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $timestamp=$row['order_datetime'];
                    $date2=date('d-M-Y',strtotime($timestamp));
                    
                    if($date==$date2)
                    {
                        $count=count((array)$date2);
                        $fullcount+=$count;
                    }
                    // else
                    // {
                    //     echo "0";
                    // }
                }
                echo  $fullcount;
            }
        }
    ?>
                <span>Complete</span>
            </div>
        </div>
    </div>
    <?php
    
        if(isset($_POST["ordercomplete"]))
        {
            $oid=$_POST["oid"];
            $activity="True";

            if(!$conn->connect_error)
            {
                $sql="UPDATE orders set activity='$activity' WHERE order_id='$oid';";

                if($conn->query($sql))
                {
                    echo "<script>window.location.href='admindashboard.php?msg=Updated data Successfully';</script>";
                }
            }
        }
    ?>
    <?php
        include('connection.php');
         
        if(!$conn->connect_error)
        {
            $sql="SELECT * from orders WHERE activity='FALSE'";
			$result=$conn->query($sql);

    ?>
        <form action="" method="post">
           <div class="board">
                <table id="datatable">
                    <thead>  
                        <tr>
                            <th scope='col'>Order Id </th>
                            <th scope='col'>Customer Name</th>
                            <th scope='col'>Date</th>
                            <th scope='col'>Paid/Not Paid</th>
                            <th scope='col'>Assign Deliver/Not</th>
                            <th scope='col'>Order Complete/Not</th>
                            <th scope='col'>Action</th>
                        </tr>
                    </thead>
                    
                <?php
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                ?>
                <tbody>
                    <tr>
                        <input type="hidden" value="<?php echo $row["order_id"]; ?>" name="oid">
                        <td><a href="customerorder.php?order_id=<?php echo $row["order_id"]; ?>" style="text-decoration:none;"><?php echo $row["order_id"]; ?></a></td>
                        <td class="name"><?php echo $row["c_full_name"]; ?></td>
                        <td><?php echo $row["order_datetime"]; ?></td>
                        <td class="payment"><?php echo $row["payment"]; ?></td>
                        <td><?php echo $row["assign_deliver"]; ?></td>
                        <td class="status"><?php echo $row["order_status"]; ?></td>
                        <td><button type="submit" name="ordercomplete" class="btn btn-danger">Complete Order</button></td>
                    </tr>
                </tbody>
                <?php
                }
            }
                ?>
                    
                </table>
                
                </div>
                </form>  
         <?php
         }
        ?>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script>
$(document).ready(function () {
    $('#datatable').DataTable(
        
    );
});
</script>
</body>
</html>