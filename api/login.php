<?php
    require('../connection.php');
    //$name=mysqli_real_escape_string($conn,$_POST['name']);
    //$email=mysqli_real_escape_string($conn,$_POST['email']);
    //$user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
    //$image=mysqli_real_escape_string($conn,$_POST['image']);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $user_id=$_POST['user_id'];
    $image=$_POST['image'];
    $check=mysqli_num_rows(mysqli_query($conn,"select * from users where user_id=".$user_id.";"));
    if($check==0)
    {
        echo "done";
        mysqli_query($conn,"INSERT INTO users(user_id,name,email,image) VALUES(".$user_id.",".$email.",".$user_id.",".$image.");");
    }
    
?>
