<?php
if($_POST)
{
$name=$_POST['RegName'];
$email=$_POST['RegInputEmail'];
$mobile=$_POST['RegContactNo'];
$sex=$_POST['RegGender'];
include("connection/db.php");
include("functions/phpfunction.php");
insert_register('tableregister',$connect,$name,$email,$mobile,$sex); 
}
else
{
echo"<script>alert('Connection error data on server! Please try again');</script>";
echo"<script>window.open('index.php','_self');</script>";
}

?>
