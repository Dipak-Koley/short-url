<?php
require('../connection.php');
session_start();
$urls = explode(',', $_POST['url']);
  foreach ($urls as $i) 
  {
    echo $i;
    echo " ";
    $k=mysqli_real_escape_string($conn,$i);
    $result=mysqli_query($conn,"select * from urls where big like '$k'");
    $check=mysqli_num_rows($result);
    if($check==0)
    {
        mysqli_query($conn,"INSERT INTO urls(big,user_id,count) VALUES ('".$i."','".$_SESSION['user_id']."','0')");
    }
  }
?>