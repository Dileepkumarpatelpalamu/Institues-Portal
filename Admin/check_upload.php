<?php
if(isset($_POST) and isset($_FILES))
{
   $title=$_POST['ImgTitle'];
   $detail=$_POST['ImgDetail'];
   $imgname=$_FILES['ImgName']['name'];
   $noticefile_temp=$_FILES['ImgName']['tmp_name'];
   $notice_size=$_FILES['ImgName']['size'];
   $file_allow=array("jpg",'png','jpeg','gif');
   $file=explode('.', $imgname);
   $file_name=time().".".$file[1];
   $path="galary/".$file_name;
   include("connection/db.php");
   if(in_array($file[1], $file_allow))
   {
       if($notice_size<=100000000)
       {

       	if(move_uploaded_file($noticefile_temp,$path))
   		{
	   		$sqlqry="INSERT INTO `tablegalary` (`ImgName`, `ImgTitle`, `ImgDetail`) VALUES ('$file_name', '$title', '$detail')";
	   		if(mysqli_query($connect,$sqlqry))
	   		{
	   			echo"<script>alert('Image uploaded successfully.');</script>";
	   			echo"<script>window.open('index.php','_self');</script>";
	   		}
   	
   		}
   		else
		{
		   echo"<script>alert('Any error on uploading the Image.');</script>";
		   echo"<script>window.open('index.php','_self');</script>";
		}

       }
       else
       {
       	echo"<script>alert('Image size not file_allow');</script>";
   		echo"<script>window.open('index.php','_self');</script>";
       }

   }
   else{
        
        echo"<script>alert('Image format does not allowed.');</script>";
   		echo"<script>window.open('index.php','_self');</script>";
   		}
   
 }

else
{
      echo"<script>alert('Unauthorised access does not allowed.');</script>";
      echo"<script>window.open('index.php','_self');</script>";
}

 ?>