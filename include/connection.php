<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hospital";
$hos_conn = mysqli_connect($servername,$username,$password,$db);
//checking connection
if ($hos_conn->connect_error)
{
die("Unable to Connect database: " .$hos_conn->connect_error);
}
?>
