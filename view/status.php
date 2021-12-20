<?php
    session_start();
    $url="../api/status.php";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
?>
<html>
    <head>
            <link rel="stylesheet" href="./css/status.css">
    </head>
<body>

<center><h1><font color="#b50505"><b>Dashboard</b></font></h1></center>
<?php echo $result; ?>
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


