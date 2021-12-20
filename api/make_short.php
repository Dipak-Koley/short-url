<?php
require('../connection.php');
session_start();
$urls = explode(',', $_POST['url']);
  foreach ($urls as $i) 
  {
    echo $i;
    echo " ";
    $result=mysqli_query($conn,"select * from urls where big like".$i);
    $check=mysqli_num_rows($result);
    if($check==0)
    {
        mysqli_query($conn,"INSERT INTO urls(big,user_id,count) VALUES ('".$i."','".$_SESSION['user_id']."','0')");
    }
  }
?>