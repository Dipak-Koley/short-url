<?php
echo $_POST['url'];
$urls = explode(',', $_POST['url']);
/*for ($x = 0; $x < count($array); $x++) {
    echo $array." ";
  }*/
  foreach ($urls as $i) {
  echo $i;
  echo " ";

}

?>