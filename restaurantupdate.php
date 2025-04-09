<?php
    
    include('connection.php');

    if(isset($_POST['resupdate']))
    {
        $rid=$_POST["rid"];
        $rname=$_POST["rname"];
        $bio=$_POST["bio"];
        $raddress=$_POST["raddress"];
        $remail=$_POST["remail"];
        $rco=$_POST["rco"];
        $rtime=$_POST["rtime"];

        if(!$conn->connect_error)
        {
            $sql="UPDATE restaurant set restaurant_id='$rid',restaurant_name='$rname',bio='$bio',restaurant_email='$remail',
            restaurant_address='$raddress',restaurant_contact_no='$rco',restaurant_time_available='$rtime' 
            WHERE restaurant_id='$rid';";
         
            if($conn->query($sql))
            {  
                header('location:restauranteditdelete.php?msg=Data Successfully Updated');
            }
            else
            {
                header('location:restauranteditdelete.php?msg=Query Error');
            }
        }
        else
        {
            header('location:restauranteditdelete.php?msg=Connection Error');
        } 
    }
?>

