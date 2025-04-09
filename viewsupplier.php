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
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/datatables.bootstrap4.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <style>
        h5{
			color:red;
			text-align:center;
		}
    </style>
</head>
<body style="background-image:url(img/foodbackgroundimage.jpg);">
    <?php
        include('connection.php');
         
        if(!$conn->connect_error)
        {
            $sql="SELECT * from supplier";
			$result=$conn->query($sql);

    ?>
            <div class="table-wrapper">
                <div class="table-title">
                <?php
                    if(isset($_GET["msg"]))
                    {
                        echo "<h5>".$_GET['msg']."</h5>";
                    }
                ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="suppplierregister.php">
                                <button class="btn btn-danger" style="float:left;">Add</button>
                            </a>
                            <h2>All Suppliers Details</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="admindashboard.php"><button class="btn btn-danger">Back</button></a>
                        </div>
                    </div>
                </div>
                <table id="datatable" class="table table-striped table-hover">
                    <thead>  
                        <tr>
                            <th scope='col'>Supplier Id</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Contact No</th>
                            <th scope='col'>Email</th>
                            <th scope='col'>View</th>
                            <th scope='col'>Edit</th>
                            <th scope='col'>Delete</th>
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
                        <td><?php echo $row["supplier_id"]; ?></td>
                        <td><?php echo $row["s_full_name"]; ?></td>
                        <td><?php echo $row["s_contact_no"]; ?></td>
                        <td><?php echo $row["s_email"]; ?></td>
                        <td><a href="viewallsupplier.php?supplier_id=<?php echo $row["supplier_id"]; ?>"><button class="btn btn-dark">View</button></a></td>
                        <td><a href="editsupplier.php?supplier_id=<?php echo $row["supplier_id"]; ?>"><button class="btn btn-primary">Edit</button></a></td>
                        <td><a href="deletesupplier.php?supplier_id=<?php echo $row["supplier_id"]; ?>" class="btn btn-dark" style="color:#fff;" onClick="return checkdelete()">Delete</a></td>
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
<script>
	function checkdelete() {
		return confirm('Are you sure you want to delete this Record');
	}
</script>
</body>
</html>