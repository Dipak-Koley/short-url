<?php
    require('../connection.php');
    //$name=mysqli_real_escape_string($conn,$_POST['name']);
    $name=$_POST['name'];
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
    $image=mysqli_real_escape_string($conn,$_POST['image']);
    $result=mysqli_query($conn,"select * from users where user_id like '$user_id'");
    
    
    /*while($row=mysqli_fetch_assoc($result)){
        $array[]=$row;
    }
    echo json_encode(['data'=>$array]);*/
    $check=mysqli_num_rows($result);
    if($check==0)
    {
        echo "done";
        mysqli_query($conn,"INSERT INTO users(user_id,name,email,image) VALUES ('1','".$name."','r@abc.com','123')");
    }
    
?>
