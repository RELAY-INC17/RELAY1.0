<?php
require "dbconn.php"; 
$username = $_POST["user"];
$password = $_POST["pass"];
$query = "SELECT * FROM users WHERE username = '$username' AND password = md5('$password');";
$result = mysqli_query($dbconn, $query);
if(mysqli_num_rows($result) > 0){
	echo "1";
}
else{
	echo "0";
}
?>