<?php
if (isset($_GET["emp_id"]))
{
	include('connection.php');

	if(!$conn->connect_error)
	{
		$chid=$_GET["emp_id"];

		$sql="DELETE from chef WHERE emp_id='$chid'";

		if($conn->query($sql))
		{
			header("location:viewchef.php?error=Record Successfully deleted");
		}
		else
		{
			header("location:viewchef.php?error=Query Error");
		}
	}	
	else
	{
		header("location:viewchef.php?error=Connection Error");
	}
}
else
{
	header('location:viewchef.php');
}
?>