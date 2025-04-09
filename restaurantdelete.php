<?php
if (isset($_GET["restaurant_id"]))
{
	include('connection.php');

	if(!$conn->connect_error)
	{
		$resid=$_GET["restaurant_id"];

		$sql="DELETE from restaurant WHERE restaurant_id='$resid'";

		if($conn->query($sql))
		{
			header("location:restauranteditdelete.php?error=Record Successfully deleted");
		}
		else
		{
			header("location:restauranteditdelete.php?error=Query Error");
		}
	}	
	else
	{
		header("location:restauranteditdelete.php?error=Connection Error");
	}
}
else
{
	header('location:restauranteditdelete.php');
}
?>