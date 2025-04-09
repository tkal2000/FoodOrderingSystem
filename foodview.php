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
        <?php
        include('connection.php');
         
        if(!$conn->connect_error)
        {
            $sql="SELECT * from food";
			$result=$conn->query($sql);

        ?>
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>All Food Details</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
                        </div>
                    </div>
                </div>
                <table id="datatable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope='col'>Food Id</th>
                            <th scope='col'>Food Name</th>
                            <th scope='col'>Image</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Description</th>
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
                            <td><?php echo $row["food_id"]; ?></td>
                            <td><?php echo $row["food_name"]; ?></td>
                            <td><img src="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["food_image"]);?>" width="100px" height="100px"></td>
                            <td>Rs.<?php echo $row["price"]; ?>/=</td>
                            <td><?php echo $row["description"]; ?></td>
                        </tr>
                    </tbody>
                    <?php
                }
            }
            ?>
            </table>
            </div>
        <?php
            }
        ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>