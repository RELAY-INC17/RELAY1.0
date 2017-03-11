<?php
require "conn.php"; 
$user_name = $_POST["user"];
$user_pass = $_POST["pass"];
$query = "SELECT * FROM users WHERE email = '$username' AND password = md5('$password');";
$result = pg_query($dbconn, $query);
if(mysqli_num_rows($result) > 0){
	echo "1";
}
else{
	echo "0";
}
?>