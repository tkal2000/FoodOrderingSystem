<?php
    if(isset($_POST["register"]))
    {
        $fname=$_POST["fname"];
        $nic=$_POST["nic"];
        $address=$_POST["address"];
        $cno=$_POST["cno"];
        $uname=$_POST["uname"];
        $gender=$_POST["gender"];
        $dob=$_POST["dob"];
        $deliver=$_POST["deliver"];
        $regdate=$_POST["regdate"];
        $qulification=$_POST["qulification"];
        $img=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
        $dpwrd=$_POST["dpwrd"];
        $type="Deliver";

        include('connection.php');
        
        if(!$conn->connect_error)
        {
            $sql="INSERT into deliver(d_nic,d_full_name,d_address,d_dob,d_contact_no,d_gender,d_qualification,roll_of_the_employee,d_email,d_registration_date,d_profile_photo,d_password)
            values('$nic','$fname','$address','$dob','$cno','$gender','$qulification','$deliver','$uname','$regdate','$img','$dpwrd')";
            
            if($conn->query($sql))
            {
                $sql1="INSERT into user_credintial(username,password,type)
				values('$uname','$dpwrd','$type')";

                if ($conn->query($sql1))
                {
                    header('location:deliverregister.php?msg=Data Successfully Added.'); 
                } 
            }
            else
            {
                header('location:deliverregister.php?msg=Query error');   
            }
        }
        else
        {
            header('location:deliverregister.php?msg=Connection error');
        }
    }
    else
    {
        header('location:deliverregister.php');
    }
?>