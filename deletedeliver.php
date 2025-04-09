<?php
if (isset($_GET["delivery_id"]))
{
	include('connection.php');

	if(!$conn->connect_error)
	{
		$did=$_GET["delivery_id"];

		$sql="DELETE from deliver WHERE delivery_id='$did'";

		if($conn->query($sql))
		{
			header("location:viewdeliver.php?error=Record Successfully deleted");
		}
		else
		{
			header("location:viewdeliver.php?error=Query Error");
		}
	}	
	else
	{
		header("location:viewdeliver.php?error=Connection Error");
	}
}
else
{
	header('location:viewdeliver.php');
}


?>