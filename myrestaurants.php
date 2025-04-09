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
<body style="background-image: url('img/foodbackgroundimage.jpg');">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Restaurant Details</h2>
                </div>
                <div class="col-sm-6">
                    <a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
                </div>
            </div>
        </div>
        <table id="datatable" class="table table-striped table-hover">
            <thead>
                    <tr>
                        <th scope='col'>Restaurant Id</th>
                        <th scope='col'>Restaurant Name</th>
                        <th scope='col'>Restaurant Logo</th>
                        <th scope='col'>Bio</th>
                        <th scope='col'>Restaurant Adddress</th>
                        <th scope='col'>Restaurant Email</th>
                        <th scope='col'>Restaurant Contact No</th>
                        <th scope='col'>Availabale Time</th>
                    </tr>
            </thead>
            <tbody>
                    <?php
                        include('connection.php');

                        if(!$conn->connect_error)
                        {
                            $sql="SELECT * from restaurant";
                            $result=$conn->query($sql);

                            if($result->num_rows>0)
                            {
                                while($row=$result->fetch_assoc())
                                {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["restaurant_id"]; ?></td>
                                            <td><?php echo $row["restaurant_name"]; ?></td>
                                            <td><img src="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["logo"]);?>" width="100px" height="100px"></td>
                                            <td><?php echo $row["bio"]; ?></td>
                                            <td><?php echo $row["restaurant_email"]; ?></td>
                                            <td><?php echo $row["restaurant_address"]; ?></td>
                                            <td><?php echo $row["restaurant_contact_no"]; ?></td>
                                            <td><?php echo $row["restaurant_time_available"]; ?></td>
                                        </tr>
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
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>