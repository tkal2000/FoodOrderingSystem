<?php
    
    include('connection.php');

    if(isset($_POST['chefupdate']))
    {
        $chid=$_POST["chid"];
        $chname=$_POST["chname"];
        $chnic=$_POST["chnic"];
        $chadd=$_POST["chadd"];
        $chcno=$_POST["chcno"];
        $chgen=$_POST["chgen"];
        $chdb=$_POST["chdb"];
        $chre=$_POST["chre"];
        $che=$_POST["che"];
        $chq=$_POST["chq"];
        $chrd=$_POST["chrd"];

        if(!$conn->connect_error)
        {
            $sql="UPDATE chef set emp_id='$chid',e_full_name='$chname',e_nic='$chnic',e_address='$chadd',
            e_contact_no='$chcno',e_gender='$chgen',e_dob='$chdb',roll_of_the_employee='$chre',e_email='$che',qualification='$chq',
            registration_date='$chrd' WHERE emp_id='$chid';";
            
            if($conn->query($sql))
            {
                header('location:viewchef.php?msg=Data Successfully Updated');
            }
            else
            {
                header('location:viewchef.php?msg=Query Error');
            }
        }
        else
        {
            header('location:viewchef.php?msg=Connection Error');
        } 
    }
?>

