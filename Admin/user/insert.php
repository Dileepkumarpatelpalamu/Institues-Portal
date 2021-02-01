<?php 
//sql query for insert data
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password']))
{
	$password=md5($_POST['password']);
   $qry="INSERT INTO `tablelogin` (`LName`, `LEmail`, `LMobile`,`LPassword`) VALUES ('$name', '$email', '$mobile','$password')";
   mysqli_query($conn,$qry);
}
?>