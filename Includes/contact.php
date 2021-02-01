 <div class="container-fluid">
    <div class="text-center my-2 text-white p-3">
       <a name="Contact"></a>
      <h4>Contact Us</h4>
      <hr class="w-25 bg-white">
    </div>
    <div class="container w-50 text-white">
      <form method="post" class="was-validated" action="insert_contact.php">
  <div class="form-group">
    <label for="InputName">Name</label>
    <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Name" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Please Enter Name.</div>
  </div>
  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Please Enter Valid Email.</div>
  </div>
  <div class="form-group">
    <label for="ContactNo">ContactNo</label>
    <input type="text" class="form-control" id="ContactNo" name="ContactNo" placeholder="Mobile No." required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Please Enter Valid Mobile No.</div>
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Regarding subject" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Regarding subject.</div>
  </div>
  <div class="form-group">
    <label for="txtsubjectdetail">Suject Details</label>
    <textarea class="form-control" id="txtsubjectdetail" name="txtsubjectdetail" rows="6" placeholder="Regarding subject in details" required></textarea>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Suject description min(50 words).</div>
  </div>
  <button type="submit" class="btn btn-warning" name="submit">Send</button>
</form>
</div>
  </div>