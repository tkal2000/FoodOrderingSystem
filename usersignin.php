<?php
	include('connection.php');

	if(isset($_POST["login"]))
	{
		$username=$_POST['uname'];
		$password=$_POST['pwrd'];

		if(empty($username) || empty($password))
		{
			header('location:userlogin.php?msg=Please Enter Username and Password');
		}
		else
		{
			if (!$conn->connect_error)
			{
				$sql="select customer_id,c_username,c_password from customer where c_username='$username' AND c_password='$password';";
				$result=mysqli_query($conn,$sql);

				if (mysqli_fetch_assoc($result))
				{
					session_start();
					$_SESSION["uname"]=$username;
					header('location:foodlist.php');
				}
				else
				{
					header('location:userlogin.php?msg=Please enter correct Username and Password');
				}	
			}
			else
			{
				header('location:userlogin.php?msg=Connection Error');
			}
		}
	}
	else
	{
		echo 'Not Working';
	}
?>