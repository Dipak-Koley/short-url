<html>
    <head>
            <link rel="stylesheet" href="./css/status.css">
    </head>
<body>

<center><h1><font color="#b50505"><b>Dashboard</b></font></h1></center>
<table id="status_table">
  <tr>
    <th>Original</th>
    <th>Short</th>
    <th>Hit</th>
  </tr>

<?php
    session_start();
    require('../connection.php');
    $base="18.221.4.188/w/s/?q=";
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
            //$array[]=$row;
            echo "<tr>
            <td>".$row['big']."</td>
            <td>".$base.$row['small']."</td>
            <td>".$row['count']."</td>
          </tr></table>";
        }
    }
    else echo "</table><center><font color='red';><h1>NO DATA FOUNT</H1></FONT></CENTER>";
?>
</body>
</html>


