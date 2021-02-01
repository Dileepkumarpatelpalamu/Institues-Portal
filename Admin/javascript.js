//function for selected data
function GetUserDetail(id){
	$("#hidden_user_id").val(id);
	$.post("backend.php", {
		id:id
	}, function(data,status){
			var user = JSON.parse(data);
			$('#sendname').val(user.CName);
			$('#sendmobile').val(user.CMobile);
			$('#sendsubject').val(user.CSubject);
	});
	$('#conModal').modal('show');
}

function SendMessage()
{
    var name =$("#sendname").val();
	var mobile =$("#sendmobile").val();
   var subject =$("#sendsubject").val();
   var message =$("#sendmessage").val();
   $.ajax({
   	 url : "backend.php",
   	 type : "post",
   	 data : {
   	 	name:name,
   	 	mobile: mobile,
   	 	subject:subject,
   	 	message : message
   	 },
   	 success: function(data, status){
   	 	if(data['status']=200)
   	 	{
   	 		alert("Message send successfully!!!!");
   	 	}
   	 	else{
   	 		alert("Network error Try again!!!!");
   	 	}
   	 	$('#conModal').modal('hide');
   	 	}
   });
}