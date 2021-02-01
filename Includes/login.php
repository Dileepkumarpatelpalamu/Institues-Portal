<div class="container-fluid text-white w-50">
    <div class="text-center my-2 text-white p-3">
       <a name="Login"></a>
      <h4>Login</h4>
      <hr class="w-25 bg-white">
    </div>
    <div>
      <form name="frmlogin" method="post" class="was-validated " action="Admin/check.php">
  <div class="form-group">
    <label for="InputEmail">Email address</label>
    <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Please Enter Valid Email.</div>
  </div>
  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" class="form-control" name="InputPassword" id="InputPassword" placeholder="Password" required>
    <div class="valid-feedback">Valid</div>
    <div class="invalid-feedback">Enter Valid Password.</div>
  </div>
  <button type="submit" class="btn btn-warning" name="btnsubmit">Login</button>
</form>
    </div>
  </div>
  