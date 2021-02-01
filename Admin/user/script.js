//addrecord function
function AddRecord(){
	var name=$("#LName").val();
	var email=$("#LEmail").val();
	var mobile=$("#LMobile").val();
	var password=$("#LPassword").val();
	var conpassword=$("#ConPassword").val();
	if(password==conpassword)
	{
	$.ajax({
		url: 'backend.php',
		type: 'post',
		data: {
			name:name, 
			email:email, 
			mobile:mobile, 
			password:password},
		success: function(data,status){
			ReadRecord();
		}
	});
	}
	else{
		alert("Password could not be match");
	}	
}
$(document).ready(function()
{
 ReadRecord();
});
//reading the data from database for function
function ReadRecord(){
	var readrecord ="readrecord";
	$.ajax({
		url : "backend.php",
		type : "post",
		data :{readrecord : readrecord},
		success: function(data, status){
			$("#record_contant").html(data);
			$('#myModal').modal('hide');
		}
	});
}
//function delete users.
function DeleteUserDetail(deleteid){
	var conf= confirm("Do you want to Delete ?");
	if(conf == true)
	{
		$.ajax({
				url :"backend.php",
				type : "post",
				data : {deleteid : deleteid},
				success : function(data,status){
					ReadRecord();
				}
		});
	}
}
//function for updating record
function GetUserDetail(id){
	$("#hidden_user_id").val(id);
	$.post("backend.php", {
		id:id
	}, function(data,status){
			var user = JSON.parse(data);
			$('#ULName').val(user.LName);
			$('#ULEmail').val(user.LEmail);
			$('#ULMobile').val(user.LMobile);
			$('#hidden_user_id').val(LId);	
	});
	$('#UpdateModal').modal('show');
}
// function for updating data
function updateuserdetail(){
	var conf=confirm("Do you sure to update user details ?");
	if(conf==true)
	{
		var name=$("#ULName").val();
		var email=$("#ULEmail").val();
		var mobile=$("#ULMobile").val();
		var hidden_user_id= $("#hidden_user_id").val();
		var image_name = $("#image").val();
	if(image_name == '')
	  {
	   alert("Please Select Image from computer");
	   return false;
	  }
  else
		  {
		   var extension = $('#image').val().split('.').pop().toLowerCase();
		   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
				   {
				    alert("Please select valid image format");
				    $('#image').val('');
				    return false;
				   }
		   else
		   {
		    $.post("backend.php", {
				name :name,
				email : email,
				mobile : mobile,
				image_name: image_name,
				contentType:false,
     			processData:false,
			    hidden_user_id : hidden_user_id
			},
			function (data,status){
				$('#UpdateModal').modal('hide');
				ReadRecord();
				alert(data);
			});
		  }
		}
	}
}
