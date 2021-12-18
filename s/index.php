<?php 
echo "This (short to big ) is working!";
	require('../connection.php');
	$sql = "SELECT * FROM urls;";
	$result=mysqli_query($conn,$sql);
	if(!$result)
	{
		die(mysqli_error($conn));
	}
	$num=mysqli_num_rows($result);
	if($num>0)
	{
        $row=mysqli_fetch_assoc($result);
	    // echo var_dump($row);
		echo $row['small'];
	}
?>
