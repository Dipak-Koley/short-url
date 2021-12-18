<?php 
	require('../connection.php');
	if(!isset($_GET['q']))
	{
		echo "<br><br><br><br><h1><font color='red'><center>ERROR 404!</center></font></h1>";
	}
	else
	{
		$q=$_GET['q'];
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
			$sql="UPDATE urls SET count=2 WHERE small=".$q.";";
			//header("Location:". $row['big']);
		}
		else
		{
			echo "<br><br><br><br><h1><font color='red'><center>ERROR 404!</center></font></h1>";
		}
	}
	
?>
