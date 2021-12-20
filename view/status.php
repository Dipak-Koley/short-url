<?php
    session_start();
    //require('../api/status.php');
    require('../connection.php');
   //header('content-type:application/josn');
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
    }
?>
<html>
    <head>
            <link rel="stylesheet" href="./css/status.css">
    </head>
<body>

<center><h1><font color="#b50505"><b>Dashboard</b></font></h1></center>
<?php echo "result ";
  echo json_encode(['status'=>true,'data'=>$array,'result'=>'found']);
?>
<table id="status_table">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Avul Pakir Jainsation (DRDO) and Indian</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Avul Pakir Jainularganisation (DRDO) and Indian</td>
    <td>Christina Berglund</td>
    <td>Sweden</td>
    <td>Germany</td>
  </tr>
</table>

</body>
</html>


