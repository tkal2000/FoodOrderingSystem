<?php
    if(isset($_POST["add"]))
    {
        $fname=$_POST["fname"];
        $prc=$_POST["prc"];
        $des=$_POST["des"];
        $fimg=addslashes(file_get_contents($_FILES["fimg"]["tmp_name"]));
       
        include('connection.php');
        
        if(!$conn->connect_error)
        {
            $sql="insert into food(food_name,price,description,food_image)
            values('$fname','$prc','$des','$fimg')";
            
            if($conn->query($sql))
            {
                header('location:addfood.php?msg=Data Successfully Added.');
            }
            else
            {
                header('location:addfood.php?msg=Query Error');
            }
        }
        else
        {
            header('location:addfood.php?msg=Connection Error');
        }
    }
    else
    {
        header('location:addfood.php');
    }
?>