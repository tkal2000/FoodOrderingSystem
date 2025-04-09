<?php
    if(isset($_POST["register"]))
    {
        $fname=$_POST["fname"];
        $nic=$_POST["nic"];
        $address=$_POST["address"];
        $cno=$_POST["cno"];
        $email=$_POST["email"];
        $gender=$_POST["gender"];
        $dob=$_POST["dob"];
        $chef=$_POST["chef"];
        $regdate=$_POST["regdate"];
        $qulification=$_POST["qulification"];
        $img=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));

        include('connection.php');
        
        if(!$conn->connect_error)
        {
            $sql="INSERT into chef(e_full_name,e_profile_photo,e_address,e_contact_no,e_gender,e_dob,roll_of_the_employee,e_nic,e_email,qualification,registration_date)
            values('$fname','$img','$address','$cno','$gender','$dob','$chef','$nic','$email','$qulification','$regdate')";
            
            if($conn->query($sql))
            {
                header('location:chefregister.php?msg=Data Successfully Added.');
            }
            else
            {
                header('location:chefregister.php?msg=Query error');
            }
        }
        else
        {
            header('location:chefregister.php?msg=Connection error');
        }
    }
    else
    {
        header('location:chefregister.php');
    }
?>