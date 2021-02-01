<?php 
if(isset($_POST['InputEmail']) AND isset($_POST['InputPassword']))
{
$Email=$_POST['InputEmail'];
$Password=md5($_POST['InputPassword']);
include("connection/db.php");
 $sqlqry="SELECT * FROM tablelogin WHERE LEmail='$Email' AND LPassword='$Password'";
 $data=mysqli_query($connect,$sqlqry);
if(mysqli_num_rows($data)>0)
{
	session_start();
	while($record=mysqli_fetch_assoc($data))
	{
		$_SESSION['uname']=$record['LName'];
		$_SESSION['uemail']=$record['LEmail'];
	}
	mysqli_close($connect);
	echo"<script>alert('You login successfully!!!!!!!!');</script>";
	echo"<script>window.open('index.php','_self');</script>";
}
else
{
	echo"<script>alert('Your Email Id and Password are wrong Try again.!!!!!!!!');</script>";
	echo"<script>window.open('../index.php','_self');</script>";
}
}
else
{
  echo"<script>alert('Unauthrorised access please login to access file..!!!!!!!!');</script>";
  echo"<script>window.open('../index.php','_self');</script>";	
}
 ?>
}

