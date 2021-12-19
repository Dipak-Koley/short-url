<?php
    require('../connection.php');
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
    $image=mysqli_real_escape_string($conn,$_POST['image']);
    echo '<pre>';
    print_r($_POST);
?>
