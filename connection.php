<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "link";

	$conn =mysqli_connect($servername,$username,$password,$database);
	if(!$conn)
	{
		die("sorry we failed to connect:".mysqli_connect_error());
	}
	else
	{
		echo "connection was succesful";
	}
	$sql = "SELECT * FROM users;";
	$result=mysqli_query($conn,$sql);
	if(!$result)
	{
		die(mysqli_error($conn));
	}
	$num=mysqli_num_rows($result);
	if($num>0){
             $row=mysqli_fetch_assoc($result);
	     echo var_dump($row);
	}
?>
