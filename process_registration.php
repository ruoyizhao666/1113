
<?php include 'db_connection.php'; ?>


<?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if($_POST['password']!=$_POST['password2']){
		echo "<script>
		alert('passwords are not consistent！');
		window.location.href='register.php';
		</script>";
	}
	$conn = OpenCon();
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$bank_account = $_POST['bank_account'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$create_date =date('Y-m-d H:i:s');
	$update_date =date('Y-m-d H:i:s');
	$role_id = $_POST['role_id'];
	$sql = "INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `password`, `email`, `bank_account`, `address`, `mobile`, `create_date`, `update_date`, `role_id`) 
	VALUES (NULL, '{$firstname}', '{$lastname}', '{$password}', '{$email}', '{$bank_account}', '{$address}', '{$mobile}', '{$create_date}', '{$update_date}', '{$role_id}');";
	
	$result = $conn->query($sql);
	if($result){
		echo "<script>
		alert('Registration successful! Welcome!');
		window.location.href='login.php';
		</script>";
	}else{
		echo "<script>
		alert('Registration failed, try again!');
		window.location.href='register.php';
		</script>";
	}
	CloseCon($conn);
	}
?>