<?php
if($_POST)
{
$name=$_POST['InputName'];
$email=$_POST['Email'];
$mobile=$_POST['ContactNo'];
$subject=$_POST['subject'];
$subdetail=$_POST['txtsubjectdetail'];
include("connection/db.php");
include("functions/phpfunction.php");
insert_contact('tablecontact',$connect,$name,$email,$mobile,$subject,$subdetail); 
}
else{
echo"<script>alert('Connection error data on server! Please try again');</script>";
echo"<script>window.open('index.php','_self');</script>";
}

 ?>