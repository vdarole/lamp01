<?php

$server_name="localhost";
$username="root";
$password="redhat";
$database_name="jobsearch";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection

if(!$conn) {
	die("Connection Failed:" . mysqli_connect_error());
	}
?>

