<?php
include("connect.php");
//data updating code for php
if(isset($_POST['id']) && isset($_POST['id']) != '')
{
		$user_id = $_POST['id'];
		$query="SELECT * FROM `tablelogin` WHERE LId = '$user_id'";
		if(!$result=mysqli_query($conn,$query))
		{
			exit(mysqli_error());
		}
		$response = array();
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$response = $row;
			}
		}
		else
		{
				$response['status']=200;
				$response['message']="Data Not Found!";
		}
			echo json_encode($response);
}
else
{
		$response['status'] =200;
		$response['message']="Invalid request";
}

//updating table
if(isset($_POST['hidden_user_id']))
{

			$update_qry="UPDATE `tablelogin` SET `LName`='$name',`LEmail`='$email',`LMobile`='$mobile' WHERE LId='$hidden_user_id'";
		  if(mysqli_query($conn,$update_qry))
			{
				     echo 'Record updated successfully';
			}
}
 ?>


