<?php

require('dbConnect.php');
/*
$testQuery = 'SELECT * FROM category';

$result = mysqli_query($connection, $testQuery);

while ($column = mysqli_fetch_array($result)) {
  print '<tr>';
  print "<td>".$column['nameCatEng']."</td>";
  print '</tr>';
  print '<tr>';
  print "<td>".$column['nameCatEs']."</td>";
  print '</tr>';
}
*/

  $testQuery1 = 'SELECT * FROM category';
  $result1 = mysqli_query($connection, $testQuery1);

function showCategories ($n, $r) {
  while ($n = mysqli_fetch_array($r)){
    print '<li data-filter=".batteries"><a href="#">'. $n['nameCatEng'] .'</a></li>';
  }
}

showCategories($testQuery1, $result1);

 ?>
