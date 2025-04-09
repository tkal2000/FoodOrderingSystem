<?php
    if(isset($_POST["add_restaurant"]))
    {
        $rid=$_POST["rid"];
        $rname=$_POST["rname"];
        $bio=$_POST["bio"];
        $raddress=$_POST["raddress"];
        $remail=$_POST["remail"];
        $rco=$_POST["rco"];
        $rtime=$_POST["rtime"];
        $rlogo=addslashes(file_get_contents($_FILES["rlogo"]["tmp_name"]));
       
        include('connection.php');
        
        if(!$conn->connect_error)
        {
            $sql="insert into restaurant(restaurant_id,restaurant_name,logo,bio,restaurant_email,restaurant_address,restaurant_contact_no,restaurant_time_available)
            values('$rid','$rname','$rlogo','$bio','$remail','$raddress','$rco','$rtime')";
            
            if($conn->query($sql))
            {
                header('location:addrestaurant.php?msg=Successfully Added');
            }
            else
            {
                header('location:addrestaurant.php?msg=Query Error');
            }
        }
        else
        {
            header('location:addrestaurant.php?msg=Connection Error');
        }
    }
    else
    {
        header('location:addrestaurant.php');
    }
?>