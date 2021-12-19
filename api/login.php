<?php
    require('../connection.php');
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
    $image=mysqli_real_escape_string($conn,$_POST['image']);
    $result=mysqli_query($conn,"select * from users where name like '$name'");
    
    
    while($row=mysqli_fetch_assoc($result)){
        $array[]=$row;
    }
    console.log(json_encode(['status'=>true,'data'=>$array,'result'=>'found']));

    $check=mysqli_num_rows($results);
    if($check==0)
    {
        echo "done";
        mysqli_query($conn,"INSERT INTO users(user_id,name,email,image) VALUES ('$user_id','$name','$email','$image')");
    }
    
?>
