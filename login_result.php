
<?php include 'db_connection.php'; ?><?php

// TODO: Extract $_POST variables, check they're OK, and attempt to login.
// Notify user of success/failure and redirect/give navigation options.

// For now, I will just set session variables and redirect.


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	
	if(empty($_POST['email'])){
		echo "<script>
		alert('email can't be empty');
		//window.location.href='login.php';
		</script>";
	}
	if(empty($_POST['password'])){
		echo "<script>
		alert('password or email is not right！');
		//window.location.href='login.php';
		</script>";
	}
	
	$conn = OpenCon();
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql = "SELECT * FROM users WHERE email = '{$email}' and  password='{$password}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	
	if($result){
		
		session_start();
		$_SESSION['logged_in'] = true;
		$_SESSION['username'] = $row['firstname'];
		if($row['role_id']==2){
				$_SESSION['account_type'] = "buyer";
		}elseif($row['role_id']==3){
				$_SESSION['account_type'] = "seller";
		}else{
			$_SESSION['account_type'] = "admin";
		}
		
	
		echo "<script>
		alert('Login successful!');
		window.location.href='index.php';
		</script>";
	}else{
		echo "<script>
		alert('Login failed, try again!');
		window.location.href='login.php';
		</script>";
	}
	CloseCon($conn);

}
	

?>