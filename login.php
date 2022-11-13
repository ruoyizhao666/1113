<?php include_once("header.php")?>
<?php include 'db_connection.php'; ?>
<div class="container">
<h2 class="my-3">Login your account</h2>

<!-- Create auction form -->
<form method="POST" action="login_result.php">
  <div class="form-group row">
    <label for="firstname" calss="col-sm-2 col-form-label text-right">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" name="email" placeholder="Email">
      <small id="FirstnameHelp" class="form-text text-muted"><span class="text-danger">* Required.</span></small>
	</div>
  </div>
  <div class="form-group row">
    <label for="firstname" calss="col-sm-2 col-form-label text-right">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Password" name="password" placeholder="Password">
      <small id="FirstnameHelp" class="form-text text-muted"><span class="text-danger">* Required.</span></small>
	</div>
  </div>
  <div class="form-group row">
    <button type="submit" class="btn btn-primary form-control">Login</button>
  </div>
</form>

<div class="text-center">Do you have an account? <a href="register.php">Register</a>

</div>

<?php
$conn = OpenCon();

$sql = "INSERT INTO users VALUES ($firstname, $lastname, $email, $create_date, $update_date, $role_id);";
$result = $conn->query($sql);

CloseCon($conn);
?>

<?php include_once("footer.php")?>