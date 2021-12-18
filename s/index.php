<?php 
	//echo "This (short to big ) is working!";
	require('../connection.php');
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
	    //echo var_dump($row);
		//echo $row['big'];
		header("Location:". $row['big']);
	}
?>
