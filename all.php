<?php
function DB_connection()
{
	$port="3306";
	$user="root";
	$pass="";
	$host="localhost";
	$dbname="test";
	$tabelname="userinfo";
    $conn = new mysqli($host,$user,"",$dbname,$port) or die("Connect failed: %s\n". $conn -> error);
	return $conn;
}
?>

