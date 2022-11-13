<?php
//echo  phpinfo();exit();
error_reporting(0);
function OpenCon()
 {
 $dbhost = "localhost:3306";
 //$dbuser = "aucadmin";
 //$dbpass = "P@ssw0rd";
 //$db = "shop";
 
$dbuser = "root";
$dbpass = "";
$db = "shop";
// Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
//


if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
?>