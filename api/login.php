<?php
    require('../connection.php');
    $user=mysqli_real_escape_string($conn,$_POST['user_id']);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $image=$_POST['image'];
    $user_id=$_POST['user_id'];
    $result=mysqli_query($conn,"select * from users where user_id like '$user'");
    $check=mysqli_num_rows($result);
    if($check==0)
    {
        mysqli_query($conn,"INSERT INTO users(user_id,name,email,image) VALUES ('".$user_id."','".$name."','".$email."','".$image."')");
    }
?>
