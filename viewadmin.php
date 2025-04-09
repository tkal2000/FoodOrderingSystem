<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
		function checkdelete() {
			return confirm('Are you sure you want to delete this Record');
		}
	</script>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    table, th, td {
  /* border: 1px solid black;
  border-collapse: collapse; */
  background-color: rgba(0, 0, 0);
  font-size:15px;
  margin-left: auto; 
  margin-right: auto;
  color:white;
  font-family: "Poppins", sans-serif;
  
}
th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
h5{
    background-color:rgb(0, 50, 74);
    color:white;
    text-align:center;
    height:50px;
    margin-top:10px;
    font-family: "Poppins", sans-serif;
}
a button {
    float:left;
    font-family: "Poppins", sans-serif;
}
</style>
</head>
<?php
        include('connection.php');
        session_start();
        $uname=$_SESSION["uname"];
    ?>
    <?php
        if(isset($_GET["error"]))
        {
            echo "<h5>".$_GET['error']."</h5>";
        }
    ?>
<body style="background-image: url('img/foodbackgroundimage.jpg');">
    
    <?php
    include('connection.php');
         if(!$conn->connect_error)
            {
                $sql="SELECT * FROM admin where a_email='$uname'";
			    $result=$conn->query($sql);

                if($result->num_rows>0)
                {
                    $row=$result->fetch_assoc();

                    ?>
                    <h5>Admin Details <a href="admindashboard.php"><button class="btn btn-danger">Back</button></a></h5>
                    
                    <table>
                        <tr>
                            <th scope='col'>Admin Id</th>
					        <td><?php echo $row["admin_id"];?></td>
                        </tr>
                        <tr>
                            <th scope='col'>NIC</th>
					        <td><?php echo $row["a_nic"];?></td>
                        </tr>
                        <tr>
                            <th scope='col'>Name</th>
					        <td><?php echo $row["a_full_name"];?></td>
                        </tr>
                        <tr>
                            <th scope='col'>Address</th>
					        <td><?php echo $row["a_address"];?></td>
                        </tr>
                        <tr>
                            <th scope='col'>Contact No</th>
					        <td><?php echo $row["a_contact_no"];?></td>
                        </tr>
                        <tr>
                            <th scope='col'>Date Of Birth</th>
					        <td><?php echo $row["a_dob"];?></td>
                        </tr>
                        <tr>
                            <th scope='col'>Email</th>
					        <td><?php echo $row["a_email"];?></td>
                        </tr>
                        <tr>
                            <th scope='col'>Profile Photo</th>
					        <td><img src="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["a_image"]);?>" style="width:100px;height:100px;border-radius:100%;"></td>
                        </tr>
                        <tr>
                            <th scope='col'>Password</th>
					        <td><?php echo $row["a_password"];?></td>
                        </tr>
                        <tr>
                            <td>
                            <a href="deleteadmin.php?admin_id=<?php echo $row["admin_id"]; ?>" class="btn btn-danger" onClick="return checkdelete()">Delete</a></td>
                        </tr>
                        </table>
                        
                    <?php
                }
            }
        
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>