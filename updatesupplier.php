<?php
    
    include('connection.php');

    if(isset($_POST['supplierupdate']))
    {
        $sid=$_POST["sid"];
        $sname=$_POST["sname"];
        $scno=$_POST["scno"];
        $se=$_POST["se"];
        
        if(!$conn->connect_error)
        {
            $sql="UPDATE supplier set supplier_id='$sid',s_full_name='$sname',s_contact_no='$scno',s_email='$se'
            WHERE supplier_id='$sid';";
            
            if($conn->query($sql))
            { 
                header('location:viewsupplier.php?msg=Data Successfully Updated');
            }
            else
            {
                header('location:viewsupplier.php?msg=Query Error');
            }
        }
        else
        {
            header('location:viewsupplier.php?msg=Connection Error');
        }   
    }
?>

