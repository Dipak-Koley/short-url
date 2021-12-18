<?php
    require('../connection.php');
    $sql="select * from urls";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res)){
            $arr[]=$row;
        }
        echo json_encode(['status'=>true,'data'=>$array,'result'=>'found']);
    }
    else{
        echo json_encode(['status'=>true,'data'=>$array,'No data found'=>'found']);
    }
?>