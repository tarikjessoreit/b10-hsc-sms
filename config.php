<?php 
session_start();
date_default_timezone_set("Asia/Dhaka");

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "b10-hsc-sms";


$conn = new mysqli($hostname,$username,$password,$dbname);

if ($conn->connect_error) {
	die('Connect Error: '.$conn->connect_error);
}


// $q = 'drop database user ';
// if($conn->query($q)===true){
// 	echo "Database Create Successfull";
// }else{
// 	echo "Error: ".$conn->error;
// }