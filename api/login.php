<?php
    require('../connection.php');
    session_start();
    $user=mysqli_real_escape_string($conn,$_POST['user_id']);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $image=$_POST['image'];
    $user_id=$_POST['user_id'];
    $_SESSION['user_id']=$user_id;
    $result=mysqli_query($conn,"select * from users where user_id like '$user'");
    $check=mysqli_num_rows($result);
    if($check==0)
    {
        mysqli_query($conn,"INSERT INTO users(user_id,name,email,image) VALUES ('".$user_id."','".$name."','".$email."','".$image."')");
        $_SESSION['name']=$name;
    }
    else
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['name']=$row['name'];
    }
?>
