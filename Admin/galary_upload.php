<?php 
include("includes/header.php"); ?>
  <h5 class="text-center mt-5">Image files Uploading System</h5>
          
            <!-- Button trigger modal -->
            <div class="text-center p-5" style="height: 450px;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Galary Uploaded
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Image files Uploading  on the server</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
    <div class="container w-100 text-primary">
      <form method="post" class="was-validated" enctype="multipart/form-data" action="check_upload.php">
  <div class="form-group">
    <label for="ImgTitle">Image Title.</label>
    <input type="text" class="form-control" id="ImgTitle" name="ImgTitle" placeholder="Image Title" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Image Title</div>
  </div>
  <div class="form-group">
    <label for="ImgDetail">Image detail is store in database to use.</label>
    <textarea class="form-control" id="ImgDetail" rows="6" name="ImgDetail" placeholder="Regarding Image biography in details" required></textarea>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Image Details.</div>
  </div>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="ImgName">
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
<?php include("includes/footer.php") ?>