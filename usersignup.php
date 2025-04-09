<?php
    session_start();
    if(isset($_POST["signup"]))
    {
        $fname=$_POST["fname"];
        $address=$_POST["address"];
        $cno=$_POST["cno"];
        $uname=$_POST["uname"];
        $pwrd=$_POST["pwrd"];
        $type="User";

        include('connection.php');
        
        if(!$conn->connect_error)
        {
            $sql="insert into customer(c_full_name,c_address,c_contact_no,c_email,c_password)
            values('$fname','$address','$cno','$uname','$pwrd')";
            
            if($conn->query($sql))
            {
                $sql1="INSERT into user_credintial(username,password,type)
				values('$uname','$pwrd','$type')";

                if ($conn->query($sql1))
                {
                    $_SESSION['message']="Your account has been created.";
                    header('location:adminlogin.php');
                }
                
            }
            else
            {
                header('location:adminlogin.php?msg=Query error');
            }
        }
        else
        {
            header('location:adminlogin.php?msg=Connection error');
        }
    }
    else
    {
        header('location:adminlogin.php');
    }
?>