<?php
	function select_contact($table,$connect)
	{
		$sqlqry="SELECT * FROM $table ORDER BY CId DESC";
		$row=mysqli_query($connect,$sqlqry);
		$count=0;
		while($data=mysqli_fetch_assoc($row))
		{
			$name=$data['CName'];
			$mobile=$data['CMobile'];
			$subject=$data['CSubject'];
			$detail=$data['CSubjectDetail'];
			$date=$data['CDate'];
			$id=$data['CId'];
			$count++;
		
		?>
	<tr class="text-info">
	  <th scope="col"><?php echo $count; ?></th>
      <th scope="col"><?php echo $name; ?></th>
      <th scope="col"><?php echo $mobile; ?></th>
      <th scope="col" class="text-justify"><?php echo $subject; ?></th>
      <th scope="col"class="text-justify"><?php echo $detail; ?></th>
      <th scope="col"><?php echo $date; ?></th>
      <th scope="col"><button class="btn btn-primary" onclick="GetUserDetail(<?php echo $id;?>)">Send</button>
      </th>
</tr>
		<?php

	}
}
//function for displaying the notification
function display_notice($table,$connect)
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
		echo"<p>SL-$count Notification No-$nno Details- $ndetail on Dated-$Ndate<div class='text-right'><a href='News/file/$filename' class='btn btn-primary'>Download</a><a href='delete.php?del_id=$filename' class='btn btn-primary'>Delete</a></div></p>";
		}
}

//function for display register
function display_register($table,$connect)
	{
		$sqlqry="SELECT * FROM $table ORDER BY RId DESC";
		$row=mysqli_query($connect,$sqlqry);
		$count=0;
		while($data=mysqli_fetch_assoc($row))
		{
			$name=$data['RName'];
			$email=$data['REmail'];
			$mobile=$data['RMobile'];
			$gender=$data['RGender'];
			$count++;
		
		?>
	<div class="row text-center text-white p-2">
    <div class="col-sm-2 col-md-2 col-lg-2"><?php echo $count;?></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><?php echo $name;?></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><?php echo $email;?></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><?php echo $mobile;?></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><?php echo $gender;?></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><a href="<?php echo $mobile;?>" name="<?php echo $mobile ;?>" class="btn btn-success">More</a></div>
    <hr class="w-100">
  </div>
		<?php

	}
}
?>