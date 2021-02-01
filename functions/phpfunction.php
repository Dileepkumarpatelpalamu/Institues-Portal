
<?php 
function display_notification($table,$connect)
{
	$sqlqry="SELECT * FROM $table ORDER BY NId DESC";
		$row=mysqli_query($connect,$sqlqry);
		$count=0;
		while($data=mysqli_fetch_assoc($row))
		{
			$filename=$data['NFileName'];
			$ndetail=$data['NDetail'];
			$nno=$data['NNo'];
			$Ndate=$data['NDate'];
			$count++;
		echo"<button type='button' class='list-group-item list-group-item-action active text-primary bg-white mr-2'><img src='Admin/image/new.gif' class='ml-3'/>Notification No-$nno on dated-$Ndate Regarding-$ndetail <div class='p-2 mx-4'><a href='Admin/News/file/$filename' class='btn btn-success'>Download</a></div></button>";
		}
}


//insert contact functions
function insert_contact($table,$connect,$name,$email,$mobile,$subject,$subdetail)
{
	$sqlqry="INSERT INTO $table (`CName`, `CEmail`, `CMobile`, `CSubject`, `CSubjectDetail`) VALUES ('$name', '$email', '$mobile', '$subject', '$subdetail')";
	$row=mysqli_query($connect,$sqlqry);
	if($row)
	{
		echo"<script>alert('Thank you for cantact me and immediately our team will be contact you for suggestion or problems trobleshouting.');</script>";
   		echo"<script>window.open('index.php','_self');</script>";
	}
	else{
		echo"<script>alert('Server error on sending data on server! Please try again');</script>";
   		echo"<script>window.open('index.php','_self');</script>";

	}	

}
//register function

function insert_register($table,$connect,$name,$email,$mobile,$sex)
{
	$sqlqry="INSERT INTO `$table` (`RName`, `REmail`, `RMobile`, `RGender`) VALUES ('$name', '$email', '$mobile', '$sex')";
	$row=mysqli_query($connect,$sqlqry);
	if($row)
	{
		echo"<script>alert('You are registered successfully verify immediately our team will be contacted you');</script>";
   		echo"<script>window.open('index.php','_self');</script>";
	}
	else{
		echo"<script>alert('Server error on sending data on server! Please try again');</script>";
   		echo"<script>window.open('index.php','_self');</script>";

	}	


}
//function for display galary
function display_galary($table,$connect)
{
	$sqlqry="SELECT * FROM $table ORDER BY rand()limit 8";
		$row=mysqli_query($connect,$sqlqry);
		$count=0;
		while($data=mysqli_fetch_assoc($row))
		{
			$name=$data['ImgName'];
			$title=$data['ImgTitle'];
			$detail=$data['ImgDetail'];
			$date=$data['ImgDate'];
			$count++;
		echo"<div class='col-sm-6 col-md-3 col-lg-3 p-3'>
             

  <div class='card text-center'>
  <div class='card-header text-primary'>
    $title
  </div>
  <div class='card-body text-dark'>
    <h5 class='card-title'><img src='Admin/galary/$name' class='img-fluid my-2' style='height:200px;'></h5>
    <p class='card-text'>$detail.</p>
    <a href='Admin/galary/$name' class='btn btn-primary'>Download</a>
  </div>
  <div class='card-footer text-muted'>
    Uploads On- $date
  </div>
</div>

















        </div>";
		}
}


?>