<?php 
$host="localhost";
$user="root";
$upassword="";
$database="dhirajclass";
$connect=mysqli_connect($host,$user,$upassword,$database);
if(!$connect)
{
	die('Database could not be connect'.mysql_error());	
}
else{
}

?>