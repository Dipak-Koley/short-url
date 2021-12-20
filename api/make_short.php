<?php
echo $_POST['url'];
$array = explode(',', $_POST['url']);
for ($x = 0; $x < count($array); $x++) {
    echo $array." ";
  }

?>