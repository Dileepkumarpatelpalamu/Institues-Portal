<?php 
include("connection/db.php");
if(isset($_POST['id']) && isset($_POST['id']) != '')
{
		$user_id = $_POST['id'];
		$query="SELECT * FROM `tablecontact` WHERE CId = '$user_id'";
		if(!$result=mysqli_query($connect,$query))
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
/// sending the message
if(isset($_POST['message']))
{
$url="https://www.sms4india.com/api/v1/sendCampaign";
$name=@$_POST['name'];
$mobile=@$_POST['mobile'];
$subject=@$_POST['subject'];
$message=@$_POST['message'];
$message="Name-".$name.", Mobile No-".$mobile.", Subject-".$subject.", Message-".$message;
$message = urlencode($message);
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=7K3TXY5Q4BPE3L4FKWQ9HW7M8MOZ3DCJ&secret=NAXI2DLU5SLES7QI&usetype=stage&phone=$mobile&senderid=pateldileep51@gmail.com&message=$message");
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
if($result)
{
	echo $result;
}
else{
	
}
}
?>