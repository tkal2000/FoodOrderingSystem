<?php
        include('connection.php');
        
        if(isset($_POST['save']))
        {
            $did=$_POST["did"];
            $nic=$_POST["nic"];
            $name=$_POST["name"];
            $address=$_POST["address"];
            $dob=$_POST["dob"];
            $cno=$_POST["cno"];
            $email=$_POST["email"];
            $pwrd=$_POST["pwrd"];
           
            if(!$conn->connect_error)
            {
                $sql="UPDATE deliver set d_nic='$nic',d_full_name='$name',d_address='$address',d_dob='$dob',
                d_contact_no='$cno',d_password='$pwrd'
                WHERE delivery_id='$did';";
             
                
                if($conn->query($sql))
                {
                    $sql1="UPDATE user_credintial set username='$email',password='$pwrd'WHERE username='$email'";
                    if($conn->query($sql1))
                    {
                        header('location:viewonedeliver.php?msg=Updated Successfully');
                    }   
                }
                else
                {
                    header('location:viewonedeliver.php?msg=Query Error');
                }
            }
            else
            {
                header('location:viewonedeliver.php?msg=Connection Error');
            }   
        }
    ?>