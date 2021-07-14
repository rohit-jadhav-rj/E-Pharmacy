<?php



$host = "localhost:3307";
$username = "root";
$password = '';
$database = 'demo';

$con = mysqli_connect($host,$username,$password,$database) or die('Could not connect to database');

if($con)
{

	// echo "database connected";
}




?>