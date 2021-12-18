<?php 
	require('../connection.php');
	$q=$_GET['q'];
	if(!isset($_GET['q']))
	{
		echo "<br><br><br><br><h1><font color='red'><center>ERROR 404!</center></font></h1>";
	}
	else
	{
		$sql = "SELECT * FROM urls where small=".$q.";";
		$result=mysqli_query($conn,$sql);
		if(!$result)
		{
			die(mysqli_error($conn));
		}
		$num=mysqli_num_rows($result);
		if($num>0)
		{
			$row=mysqli_fetch_assoc($result);
			header("Location:". $row['big']);
		}
		else
		{
			echo "<br><br><br><br><h1><font color='red'><center>ERROR 404!</center></font></h1>";
		}
	}
	
?>
