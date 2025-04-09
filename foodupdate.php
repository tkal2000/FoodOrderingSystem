<?php
    session_start();
    include('connection.php');

    if(isset($_POST['fupdate']))
    {
        $fid=$_POST["fid"];
        $fname=$_POST["fname"];
        $prc=$_POST["prc"];
        $des=$_POST["des"];
       
        if(!$conn->connect_error)
        {
            $sql="UPDATE food SET food_id='$fid',food_name='$fname',description='$des',price='$prc'
                 WHERE food_id='$fid'";

            if($conn->query($sql))
            {
                header('location:viewedit.php?msg=Updated Food Successfully');
            }
            else
            {
                header('location:viewedit.php?msg=Updated not Food Successfully');
            }
        }
        else
        {
            header('location:viewedit.php?msg=Connection Error');
        }
    }
?>

