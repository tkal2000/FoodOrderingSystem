<?php
    if(isset($_POST["signup"]))
    {
        $fname=$_POST["fname"];
        $nic=$_POST["nic"];
        $address=$_POST["address"];
        $cno=$_POST["cno"];
        $dob=$_POST["dob"];
        $uname=$_POST["uname"];
        $pwrd=$_POST["pwrd"];
        $admin=$_POST["admin"];
        $img=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
        $type="Admin";

        include('connection.php');
        
        if(!$conn->connect_error)
        {
            $sql="insert into admin(a_nic,a_full_name,a_address,a_contact_no,a_dob,a_email,a_image,roll_of_the_employee,a_password)
            values('$nic','$fname','$address','$cno','$dob','$uname','$img','$admin','$pwrd')";
            
            if($conn->query($sql))
            {
                $sql1="INSERT into user_credintial(username,password,type)
				values('$uname','$pwrd','$type')";

                if ($conn->query($sql1))
                {
                    header('location:adminlogin.php?msg=Data Inserted Successfully');
                }
            }
            else
            {
                header('location:adminregister.php?msg=Query error');
            }
        }
        else
        {
            header('location:adminregister.php?msg=Connection error');
        }
    }
    else
    {
        header('location:adminregister.php');
    }
?>