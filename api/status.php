<?php
    session_start();
    require('../connection.php');
    header('content-type','application/josn');
    $sql = "SELECT * FROM urls where user_id=".$_SESSION['user_id']." order by small desc;";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        die(mysqli_error($conn));
    }
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $array[]=$row;
        }
        echo json_encode(['status'=>true,'data'=>$array,'result'=>'found']);
    }
    else{
        echo json_encode(['status'=>true,'data'=>'No data found', 'result'=>'not']);
    }
?>