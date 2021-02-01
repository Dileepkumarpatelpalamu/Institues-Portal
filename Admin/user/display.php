<?php
extract($_POST);
extract($_FILES);
//sql queryfor display display
if(isset($_POST['readrecord']))
{
	$data = "<table class='table table-bordered'>
	<tr class='text-center'>
	<th>S.No</th>
	<th>Login Name</th>
	<th>Login Email</th> 
	<th>Mobile No.</th>
	<th>Login Date</th>
	<th>Photo</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>";
	$display_query = "select * from tablelogin";
	$result = mysqli_query($conn,$display_query);
	if(mysqli_num_rows($result)>0)
	{
		$number=1;
		while ($row=mysqli_fetch_assoc($result)) {
			$data .='<tr>
					 <td>'.$number.'</td>
					 <td>'.$row["LName"].'</td>
					 <td>'.$row["LEmail"].'</td>
					 <td>'.$row["LMobile"].'</td>
					 <td>'.$row["LDate"].'</td>
					 <td><img src="" height="60" width="75" class="img-thumbnail"/></td>
					 <td><button class="btn btn-danger" onclick="GetUserDetail('.$row['LId'].')">Edit</button></td>
					 <td><button class="btn btn-danger" onclick="DeleteUserDetail('.$row['LId'].')">Delete</button></td></tr>';
					 $number++;
		}
	}
	$data.="</table>";
	echo $data;
}


 ?>