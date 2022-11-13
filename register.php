<?php include_once("header.php")?>
<?php include 'db_connection.php'; ?>
<div class="container">
<h2 class="my-3">Register new account</h2>

<!-- Create auction form -->
<form method="POST" action="process_registration.php">
  <div class="form-group row">
    <label for="accountType" class="col-sm-2 col-form-label text-right">Registering as a:</label>
	<div class="col-sm-10">
	  <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role_id" id="accountBuyer" value="2" checked>
        <label class="form-check-label" for="accountBuyer">Buyer</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role_id" id="accountSeller" value="3">
        <label class="form-check-label" for="accountSeller">Seller</label>
      </div>
      <small id="accountTypeHelp" class="form-text-inline text-muted"><span class="text-danger">* Required.</span></small>
	</div>
  </div>
  <div class="form-group row">
    <label for="firstname" calss="col-sm-2 col-form-label text-right">First name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="First name">
      <small id="FirstnameHelp" class="form-text text-muted"><span class="text-danger">* Required.</span></small>
  </div>
  <div class="form-group row">
    <label for="lastname" calss="col-sm-2 col-form-label text-right">Last name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname"  name="lastname"  placeholder="Last name">
      <small id="LastnameHelp" class="form-text text-muted"><span class="text-danger">* Required.</span></small>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Email</label>
	<div class="col-sm-10">
      <input type="text" class="form-control" id="email"  name="email"  placeholder="Email">
      <small id="emailHelp" class="form-text text-muted"><span class="text-danger">* Required.</span></small>
	</div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label text-right">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <small id="passwordHelp" class="form-text text-muted"><span class="text-danger">* Required.</span></small>
    </div>
  </div>
  <div class="form-group row">
    <label for="passwordConfirmation" class="col-sm-2 col-form-label text-right">Repeat password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="passwordConfirmation" name="password2"  placeholder="Enter password again">
      <small id="passwordConfirmationHelp" class="form-text text-muted"><span class="text-danger">* Required.</span></small>
    </div>
  </div>
  <div class="form-group row">
    <button type="submit" class="btn btn-primary form-control">Register</button>
  </div>
</form>

<div class="text-center">Already have an account? <a href="" >Login</a>

</div>

<?php

?>

<?php include_once("footer.php")?>