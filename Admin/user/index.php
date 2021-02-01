<?php include("includes/header.php"); ?>
<div class="container mt-4">
	<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary mr-0" data-toggle="modal" data-target="#myModal">
 User Sign Up
</button>
<h3 class="text-danger text-center my-2">User's Details</h3>
<hr class="w-25">
<div id="record_contant"></div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">User's Sign Up Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
			  <div class="form-group">
			    <label for="LName">Name:</label>
			    <input type="text" class="form-control" id="LName" placeholder="Enter Name">
			  </div>
			  <div class="form-group">
			    <label for="LEmail">Email:</label>
			    <input type="email" class="form-control" id="LEmail" placeholder="Enter Email">
			  </div>
			  <div class="form-group">
			    <label for="LMobile">Mobile:</label>
			    <input type="text" class="form-control" placeholder="Enter Mobile No" id="LMobile">
			  </div>
			  <div class="form-group">
			    <label for="LPassword">Password:</label>
			    <input type="password" class="form-control" placeholder="Enter Password" id="LPassword">
			  </div>
			  <div class="form-group">
			    <label for="ConPassword">Confirm Password:</label>
			    <input type="password" class="form-control" placeholder="Confirm Password" id="ConPassword">
			  </div>
			  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary" onclick="AddRecord()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Starting of Updated Modal form -->
<div class="modal" id="UpdateModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update User's Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<form id="image_form" enctype="multipart/form-data" method="post">
			<div class="form-group">
			    <label for="ULName">Name:</label>
			    <input type="text" class="form-control" name="ULName" id="ULName">
			  </div>
			  <div class="form-group">
			    <label for="ULEmail">Email:</label>
			    <input type="email" class="form-control" name="ULEmail" id="ULEmail">
			  </div>
			  <div class="form-group">
			    <label for="ULMobile">Mobile:</label>
			    <input type="text" class="form-control" name="ULMobile" id="ULMobile">
			  </div>
			  <div class="custom-file">
			  	
				     <input type="file" name="image" id="image" class="custom-file-input" />
				     <label class="custom-file-label">Select Photo from Computer:</label>
    			
    		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary" onclick="updateuserdetail()">Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="hidden_user_id" id="hidden_user_id">
      </div>
  </form>
    </div>
  </div>
</div>

<!--Ending of Updated Modal form -->
</div>
<?php include("includes/footer.php"); ?>
