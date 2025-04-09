<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="table.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' rel='stylesheet'>
    <style>
        img{
            border-radius:100%;
        }
    </style>
    </head>
<body style="background-image: url('img/foodbackgroundimage.jpg');">
    <?php
        session_start();
        include('connection.php');
        $uname=$_SESSION["uname"];
        include('headerdeliver.php');
    ?>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Deliver Details</h2>
                </div>
                <div class="col-sm-6">
                    <a href="deliverorderview.php"><button class="btn btn-danger">Back</button></a>
                </div>
            </div>
        </div>
        <table id="datatable" class="table table-striped table-hover">
            <thead>
                <tr id="header">
                    <th>NIC</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Address</th>
                    <th>Date Of Birth</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Password</th>
                <tr>
            </thead>
            <tbody>
            <?php
                if(!$conn->connect_error)
                {
                    $sql="SELECT * FROM deliver where d_email='$uname'";
                    
                    $result=$conn->query($sql);
                        
                    if($result->num_rows>0)
                    {
                        $row=$result->fetch_assoc()
                        
             ?>
                            <tr>
                                <input type="hidden" value="<?php echo $row["delivery_id"]; ?>" name="did">
                                <td><?php echo $row["d_nic"]; ?></td>
                                <td><?php echo $row["d_full_name"]; ?></td>
                                <td><img src="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["d_profile_photo"]); ?>" style="width:100px;height:100px;"></td>
                                <td><?php echo $row["d_address"]; ?></td>
                                <td><?php echo $row["d_dob"]; ?></td>
                                <td><?php echo $row["d_contact_no"]; ?></td>
                                <td><?php echo $row["d_email"]; ?></td>
                                <td><?php echo $row["d_registration_date"]; ?></td>
                                <td><?php echo $row["d_password"]; ?></td>
                            </tr>
                <?php
                   
                            
                        }
                    }
                ?>
            </tbody>
        </table>
        </div>
</body>
</html>