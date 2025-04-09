<?php
    
    include('connection.php');

    if(isset($_POST['deliverupdate']))
    {
        $did=$_POST["did"];
        $dname=$_POST["dname"];
        $dnic=$_POST["dnic"];
        $dadd=$_POST["dadd"];
        $dcno=$_POST["dcno"];
        $dgen=$_POST["dgen"];
        $ddb=$_POST["ddb"];
        $dre=$_POST["dre"];
        $de=$_POST["de"];
        $dq=$_POST["dq"];
        $drd=$_POST["drd"];

        if(!$conn->connect_error)
        {
            $sql="UPDATE deliver set delivery_id='$did',d_full_name='$dname',d_nic='$dnic',d_address='$dadd',
            d_contact_no='$dcno',d_gender='$dgen',d_dob='$ddb',roll_of_the_employee='$dre',d_email='$de',d_qualification='$dq',
            d_registration_date='$drd' WHERE delivery_id='$did';";
         
            if($conn->query($sql))
            {  
                header('location:viewdeliver.php?msg=Data Successfully Updated');
            }
            else
            {
                header('location:viewdeliver.php?msg=Query Error');
            }
        }
        else
        {
            header('location:viewdeliver.php?msg=Connection Error');
        }   
    }
?>

