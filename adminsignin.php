<?php
	session_start();
	include('connection.php');

	if(isset($_POST["login"]))
	{
		$username=$_POST['uname'];
		$password=$_POST['pwrd'];

		if(empty($username) || empty($password))
		{
			header('location:adminlogin.php?msg=Please Enter Username and Password');
		}
		else
		{
			if (!$conn->connect_error)
			{
				$sql="SELECT * FROM user_credintial WHERE username='$username' AND password='$password';";
				$result=mysqli_query($conn,$sql);

				if($result->num_rows>0)
				{
					$row=$result->fetch_assoc();

					if($row['type']=='Admin')
					{
						$_SESSION["uname"]=$username;
						header('location:admindashboard.php');
					}
					elseif ($row['type']=='User')
					{
						$_SESSION["uname"]=$username;
						header('location:foodlist.php');
					}
					elseif ($row['type']=='Deliver')
					{
						$_SESSION["uname"]=$username;
						header('location:deliverorderview.php');
					}
				}
				else
				{
					header('location:adminlogin.php?msg=Please enter correct Username and Password');
				}
			}
			else
			{
				header('location:adminlogin.php?msg=Connection Error');
			}
		}
	}
	else
	{
		echo 'Not Working';
	}
?>