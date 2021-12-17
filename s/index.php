<?php 
echo "This is working!";

/*
$client = new MongoDB\Client(
	    'mongodb+srv://dipak:dbpassword@cluster0.rd4rg.mongodb.net/link?retryWrites=true&w=majority');

$db = $client->test;
 */



/*
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


 */
	require('../connection.php');
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
	


	//$sql = "SELECT * from users";
	/*
	if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL";
		  exit();
	}
	if ($result = $mysqli -> query($sql)) {
		  while ($row = $result -> fetch_row()) {
		    printf ("%s (%s)\n", $row[0], $row[1]);
		  }
		  $result -> free_result();
	}*/
?>
