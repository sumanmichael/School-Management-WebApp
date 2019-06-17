<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'schooldb';

$con = mysqli_connect($server,$username,$password,$db);

if (!$con) {
	die("Connection_Failed".mysqli_connect_error());
}

?>