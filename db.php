<?php
$host = 'localhost';
$username ='root';
$password = 'Data@321**#$';
$database = 'phonebook2';
$dbcon = new mysqli($host, $username, $password, $database);
if(!$dbcon){
	die('could not find database'. mysqli_error($dbcon));
}

?>