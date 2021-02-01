<?php
//sql query for delete data
if(isset($_POST['deleteid']))
{
	$deleteid= $_POST['deleteid'];
	$delete_qry="delete from tablelogin where LId ='$deleteid'";
	mysqli_query($conn,$delete_qry);
}
 ?>