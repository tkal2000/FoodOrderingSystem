<?php
if (isset($_GET["supplier_id"]))
{
	include('connection.php');

	if(!$conn->connect_error)
	{
		$sid=$_GET["supplier_id"];

		$sql="DELETE from supplier WHERE supplier_id='$sid'";

		if($conn->query($sql))
		{
			header("location:viewsupplier.php?error=Record Successfully deleted");
		}
		else
		{
			header("location:viewsupplier.php?error=Query Error");
		}
	}	
	else
	{
		header("location:viewsupplier.php?error=Connection Error");
	}
}
else
{
	header('location:viewsupplier.php');
}
?>