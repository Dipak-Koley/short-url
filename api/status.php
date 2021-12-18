<?php
    require('../connection.php');
    $sql = "SELECT * FROM urls;";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        die(mysqli_error($conn));
    }
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $arr[]=$row;
        }
        echo json_encode(['status'=>true,'data'=>$array,'result'=>'found']);
    }
    else{
        echo json_encode(['status'=>true,'data'=>$array,'No data found'=>'found']);
    }
?>