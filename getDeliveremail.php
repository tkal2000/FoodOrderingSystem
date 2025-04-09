<?php
	$dId=$_POST["d"];
    include('connection.php');
	
	$result=$conn->query("SELECT d_full_name FROM deliver where d_email='".$dId."'");
	if($result->num_rows>0)
	{
		$row=$result->fetch_assoc();
	?>		
		<input type="hidden" value="<?php echo $row ['d_full_name'];?>" name="dname">
<?php 	
	}
	else
	{
		echo "no value";
	}
?>