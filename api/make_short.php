<?php
require('../connection.php');
session_start();
echo "Please Wait...";
$urls = explode(',', $_POST['url']);
  foreach ($urls as $i) 
  {
    $k=mysqli_real_escape_string($conn,$i);
    $u=mysqli_real_escape_string($conn,$_SESSION['user_id']);
    $result=mysqli_query($conn,"select * from urls where big like '$k' and user_id like '$u'");
    $check=mysqli_num_rows($result);
    if($check==0)
    {
        mysqli_query($conn,"INSERT INTO urls(big,user_id,count) VALUES ('".$i."','".$_SESSION['user_id']."','0')");
        header("Location: ../view/status.php");
      }
  }
?>