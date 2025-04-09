<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('connection.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        $(document).ready(function(){
            $("#checkAll").click(function(){
                if($(this).is(":checked"))
                {
                    $(".checkItem").prop('checked',true);
                }
                else
                {
                    $(".checkItem").prop('checked',false);
                }
            })
        })
    </script>
</head>
<body style="background-image: url('img/foodbackgroundimage.jpg');">
    <?php
        if(isset($_POST['fooddelete']))
        {
            if(isset($_POST['food_id']))
            {
                foreach($_POST['food_id'] as $fid)
                {
                    $sql="DELETE from food where food_id='$fid'";
                    $result=$conn->query($sql);
                }
            }
        }
        if(!$conn->connect_error)
        {
            $sql="SELECT * from food";
            $result=$conn->query($sql);
        }
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
        <form action="deletefood.php" method="post">
        <table id="datatable" class="table table-striped table-hover">
            <thead>
                    <tr>
                        <td colspan="5">
                            <input type="submit" name="fooddelete" value="Delete" onclick="return confirm('Are you sure want to delete food?')" class="btn btn-danger">
                        </td>
                    </tr>     
                    <tr>
                        <th>#</th>
                        <th>Food Id</th>
                        <th>Food Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                    </tr>
            </thead>   
            <tbody>
                <?php
                    while($row=$result->fetch_assoc())
                    {
                ?>
                        <tr>
                            <td><input type="checkbox" class="checkItem" value="<?php echo  $row['food_id']; ?>" name="food_id[]"></td>
                            <td><?php echo  $row['food_id']; ?></td>
                            <td><?php echo  $row['food_name']; ?></td>
                            <td><img src="data:img/jpg;charset=utf;base64,<?php echo base64_encode($row["food_image"]);?>" width="50px" height="50px"></td>
                            <td>Rs.<?php echo  $row['price']; ?>/=</td>
                            <td><?php echo  $row['description']; ?></td>
                        </tr>     
                            <?php
                                    }                             
                            ?>
            </tbody>
        </form>
        </table>                   
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>