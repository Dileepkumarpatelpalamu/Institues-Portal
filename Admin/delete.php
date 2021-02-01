<?php
session_start();
include("connection/db.php");
if(isset($_GET['del_id']))
{
	$del_id=$_GET['del_id'];
	$sqlqry="DELETE FROM `tablenews` WHERE NFileName='$del_id'";
	if(mysqli_query($connect,$sqlqry))
	{
			if(unlink("News/file/$del_id"))
			{
				echo"<script>alert('Notification deleted successfully.');</script>";
	   			echo"<script>window.open('index.php','_self');</script>";
			}
			else
			{
				echo"<script>alert('Notification deleted error by server.');</script>";
	   			echo"<script>window.open('index.php','_self');</script>";
			}
	}
	else
	{
			echo"<script>alert('Notification database could not deleted on server.');</script>";
   			echo"<script>window.open('index.php','_self');</script>";
	}

}

 ?>