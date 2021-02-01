<?php
session_start();
include("../connection/db.php");
if(isset($_SESSION['uname']))
{
 if(isset($_POST) and isset($_FILES))
 {

   $noticeno=$_POST['NoticNo'];
   $noticedet=$_POST['NoticDet'];
   $noticeDate=$_POST['Noticdate'];
   $noticefile=$_FILES['Noticfile']['name'];
   $noticefile_temp=$_FILES['Noticfile']['tmp_name'];
   $notice_size=$_FILES['Noticfile']['size'];
   $file_allow=array("jpg",'pdf','png','jpeg');
   $file=explode('.', $noticefile);
   $file_name=$noticeno.time().".".$file[1];
   $path="file/".$file_name;
   if(in_array($file[1], $file_allow))
   {
       if($notice_size<=500000)
       {

       	if(move_uploaded_file($noticefile_temp,$path))
   {
   		$sqlqry="INSERT INTO `tablenews` (`NNo`, `NDetail`, `NDate`, `NFileName`, `NUploadDate`) VALUES ('$noticeno', '$noticedet', '$noticeDate', '$file_name',current_timestamp())";
   		if(mysqli_query($connect,$sqlqry))
   		{
   			echo"<script>alert('Notification uploaded successfully.');</script>";
   			echo"<script>window.open('../index.php','_self');</script>";
   		}
   	
   }
   else
   {
   echo"<script>alert('Any error on uploading the files.');</script>";
   echo"<script>window.open('../index.php','_self');</script>";
	}

       }
       else
       {
       	echo"<script>alert('File size not file_allow');</script>";
   		echo"<script>window.open('../index.php','_self');</script>";
       }

   }
   else{
        
        echo"<script>alert('Files format does not allowed.');</script>";
   		echo"<script>window.open('../index.php','_self');</script>";
   }
die;
   
 }
}
else
{
      echo"<script>alert('Unauthorised access does not allowed.');</script>";
      echo"<script>window.open('../../index.php','_self');</script>";
}
 ?>
