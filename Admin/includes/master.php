<?php 
include("functions/admin_function.php"); 
include("connection/db.php"); 
?>
<div class="container-fluid bg-secondary">
    <div class="text-white">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h5 class="text-center p-5">Contact You</h5>
          <div class="mx-auto table-responsive">
          <table class="table table-hover">
  <thead>
    <tr class="text-center text-white">
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Subject</th>
      <th scope="col">Details</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   <?php
        select_contact('tablecontact',$connect);
    ?>
  </tbody>
</table>
</div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h5 class="text-center p-5">News</h5>
            <?php
            display_notice("tablenews",$connect);
            ?>
            <!-- Button trigger modal -->
            

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Uploading Document files on the server</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
    <div class="container w-100 text-primary">
      <form method="post" class="was-validated" enctype="multipart/form-data" action="News/files_upload.php">
  <div class="form-group">
    <label for="NoticNo">Notification No.</label>
    <input type="text" class="form-control" id="NoticNo" name="NoticNo" placeholder="Notification No" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Notification No</div>
  </div>
  <div class="form-group">
    <label for="NoticDet">Notification Details</label>
    <textarea class="form-control" id="NoticDet" rows="6" name="NoticDet" placeholder="Regarding Notification in details" required></textarea>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Notification Details.</div>
  </div>
  <div class="form-group">
    <label for="Noticdate">Notification Date & Time</label>
    <input type="text" class="form-control" id="Noticdate" name="Noticdate" placeholder="DD/MM/YYYY" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Notification Date.</div>
  </div>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="Noticfile">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
</div>
  </div>
    </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="submit" value="Uploads">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
</div>
<!--Starting of Modal -->

<div class="modal fade" id="conModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">SMS Contact Us Responder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
    <div class="container w-100 text-primary">
    
<div class="form-group">
    <label for="sendname">Name</label>
    <input type="text" class="form-control" id="sendname" name="sendname" readonly="true">
  </div>
  <div class="form-group">
    <label for="sendmobile">Mobile No</label>
    <input type="text" class="form-control" id="sendmobile" name="sendmobile" readonly="true">
  </div>
  <div class="form-group">
    <label for="sendsubject">Subject</label>
    <input type="text" class="form-control" id="sendsubject" name="sendsubject" readonly="true">
  </div>
  <div class="form-group">
    <label for="sendmessage">Message</label>
    <textarea name="sendmessage" class="form-control" id="sendmessage" placeholder="Mesage" rows="6" required></textarea>
  </div>
</div>
  </div>
    </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="btnsend" onclick="SendMessage()" value="Send">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="hidden" name="hidden_user_id" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>

















<!--Ending of Modal   -->
<div class="container-fluid bg-primary">
  <div class="row text-primary bg-light p-3">
    <a name="Contact"></a>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center"><h5>Register Person</h5></div>
  </div>
  <div class="row text-center text-white p-2">
    <div class="col-sm-2 col-md-2 col-lg-2">SNo</div>
    <div class="col-sm-2 col-md-2 col-lg-2">Name</div>
    <div class="col-sm-2 col-md-2 col-lg-2">Email</div>
    <div class="col-sm-2 col-md-2 col-lg-2">Mobile No.</div>
    <div class="col-sm-2 col-md-2 col-lg-2">Gender</div>
    <div class="col-sm-2 col-md-2 col-lg-2">Action</div>
    <hr class="w-100">
  </div>
  <?php display_register('tableregister',$connect);?>
</div>