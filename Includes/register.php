<div class="container-fluid">
    <div class="text-center my-2 text-white p-3">
      <h4>Register Here</h4>
      <hr class="w-25 bg-white">
    </div>
    <div class="container w-50 text-white">
      <form method="post" class="was-validated" action="insert_register.php">
  <div class="form-group">
    <label for="RegName">Name</label>
    <input type="text" class="form-control" id="RegName" name="RegName" placeholder="Name." required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Name.</div>
  </div>
  <div class="form-group">
    <label for="RegInputEmail">Email address</label>
    <input type="email" class="form-control" id="RegInputEmail" name="RegInputEmail" placeholder="Email" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Valid Email.</div>
  </div>
  <div class="form-group">
    <label for="RegContactNo">Contact No</label>
    <input type="text" class="form-control" id="RegContactNo" name="RegContactNo" placeholder="Mobile No" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Valid Mobile.</div>
  </div>
  <div class="form-group">
    <label for="RegGender">Gender</label>
    <select class="form-control" name="RegGender" Id="RegGender">
      <option value="0">Select your Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Select Gender.</div>
  </div>
  <button type="submit" class="btn btn-warning" name="submit">Register</button>
</form>
</div>
  </div>