<?php

session_start();

unset($_SESSION['logged_in']);
unset($_SESSION['account_type']);
setcookie(session_name(), "", time() - 360);
session_destroy();

echo "<script>
		alert('You have logged out!');
		window.location.href='index.php';
		</script>";
// Redirect to index
//header("Location: index.php");

?>