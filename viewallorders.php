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
</head>
<body style="background-image:url(img/foodbackgroundimage.jpg);">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Order Details</h2>
                </div>
                <div class="col-sm-6">
                    <a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
                </div>
            </div>
        </div>
        <table id="datatable" class="table table-striped table-hover">
            <thead>
                    <tr>
                        <th scope='col'>Order Id </th>
                        <th scope='col'>All Food</th>
                        <th scope='col'>Customer Name</th>
                        <th scope='col'>Total Price</th>
                        <th scope='col'>Date</th>
                        <th scope='col'>Payment</th>
                        <th scope='col'>Deliver Boy</th>
                    </tr>
            </thead>
                
                    <?php
                        include('connection.php');

                        if(!$conn->connect_error)
                        {
                            $sql="SELECT * from orders";
                            $result=$conn->query($sql);

                            if($result->num_rows>0)
                            {
                                while($row=$result->fetch_assoc())
                                {
                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row["order_id"]; ?></td>
                                        <td><?php echo $row["total_food"]; ?></td>
                                        <td><?php echo $row["c_full_name"]; ?></td>
                                        <td><?php echo $row["total_price"]; ?></td>
                                        <td><?php echo $row["order_datetime"]; ?></td>
                                        <td><?php echo $row["payment"]; ?></td>
                                        <td><?php echo $row["assign_deliver"]; ?></td>
                                    </tr>
                                </tbody>
                    <?php
                                }
                            }
                            else
                            {
                    ?>
                                <h4>No Recode Found</h4>
                    <?php
                            }
                    
                        }
                    ?>
                
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>