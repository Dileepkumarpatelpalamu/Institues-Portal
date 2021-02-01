
<?php
if(isset($_GET))
{
   $name=$_GET['name'];
   $mobile=$_GET['mobile'];
   $subject=$_GET['sub'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMS Sending System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-primary">
	<div class="container">
		<div class="text-capitalize text-center text-white"><h2>SMS Send System</h2></div>
		<form action="sms_send.php" method="post" accept-charset="utf-8" class="w-50 mx-auto was-validated">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" readonly="true" value="<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <label for="Inputmobile">Mobile No</label>
    <input type="text" class="form-control" id="Inputmobile" readonly="true" name="Inputmobile" value="<?php echo $mobile;?>">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" readonly="true" name="subject" value="<?php echo $subject; ?>" >
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" class="form-control" placeholder="Mesage" rows="6" required></textarea>
  </div>
  <button type="submit" class="btn btn-success" name="btnsend">Send</button>
		</form>
	</div>
</body>
</html>

<?php
if(isset($_POST['btnsend']))
{
	$name=@$_POST['name'];
	$mobile=@$_POST['Inputmobile'];
	$subject=@$_POST['subject'];
	$message=@$_POST['message'];
	$message="Name-".$name.", Mobile No-".$mobile.", Subject-".$subject.", Message-".$message;
$url="https://www.sms4india.com/api/v1/sendCampaign";
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
 echo "<script>alert('Message send successfully.');</script>";
 echo "<script>window.open('index.php','_self');</script>";
}
else{
echo "<script>alert('Message sending error try again.');</script>";
echo "<script>window.open('index.php','_self');</script>";
}
}
?>