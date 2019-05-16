<?php

$server = 'localhost';
$dbName = 'sunshinesolar';
$user = 'root';
$password = 'admin';

//Server Connection
$connection = mysqli_connect($server, $user, $password) or die ("Unable to connecto to the Server");
//DB Connection
$db = mysqli_select_db($connection, $dbName) or die("Unable to connecto to the DB");



 ?>
