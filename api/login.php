<?php
    require('../connection.php');
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
    $image=mysqli_real_escape_string($conn,$_POST['image']);
    $check=mysqli_num_rows(mysqli_query($conn,"select * from users where user_id='$user_id'"));
    if($check==0)
    {
        mysqli_query($conn,"insert into users(name,email,image,user_id) values('$name','$email','$image','$user_id')");
    }
    echo "done";
?>
