<?php 
	//created and developed by Dipak Koley
	//This page will be used for short url to long url redirect
	//It will redirect and also increment the counter to count the number of hit.
	//If the link is invalid it will pun an 404 error.
	
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
			$new_count=$row['count']+1;
			$sql="UPDATE `urls` SET `count`='".$new_count."' WHERE `small`='".$q."';" ;
			$result=mysqli_query($conn,$sql);
			header("Location:". $row['big']);
		}
		else
		{
			echo "<br><br><br><br><h1><font color='red'><center>ERROR 404!</center></font></h1>";
		}
	}
	
?>
