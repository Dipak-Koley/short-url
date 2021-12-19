<?php
    require('../connection.php');
    //$name=mysqli_real_escape_string($conn,$_POST['name']);
    $user=mysqli_real_escape_string($conn,$_POST['user_id']);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $image=$_POST['image'];
    $user_id=$_POST['user_id'];
    //$email=mysqli_real_escape_string($conn,$_POST['email']);
    
    //$image=mysqli_real_escape_string($conn,$_POST['image']);
    $result=mysqli_query($conn,"select * from users where user_id like '$user'");
    
    
    /*while($row=mysqli_fetch_assoc($result)){
        $array[]=$row;
    }
    echo json_encode(['data'=>$array]);*/
    $check=mysqli_num_rows($result);
    if($check==0)
    {
        echo "done";
        echo $user_id;
        echo $name;
        echo $email;
        echo $image;
        mysqli_query($conn,"INSERT INTO users(user_id,name,email,image) VALUES ('".$user_id."','".$name."','".$email."','".$image."')");
    }
    
?>
