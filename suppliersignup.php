<?php
    if(isset($_POST["register"]))
    {
        $fname=$_POST["fname"];
        $cno=$_POST["cno"];
        $email=$_POST["email"];
       
        include('connection.php');
        
        if(!$conn->connect_error)
        {
            $sql="INSERT into supplier(s_full_name,s_contact_no,s_email)
            values('$fname','$cno','$email')";
            
            if($conn->query($sql))
            {
                header('location:suppplierregister.php?msg=Data Successfully Added.');
            }
            else
            {
                header('location:suppplierregister.php?msg=Query error');
            }
        }
        else
        {
            header('location:suppplierregister.php?msg=Connection error');
        }
    }
    else
    {
        header('location:suppplierregister.php');
    }
?>