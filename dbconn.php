<?php
  $host = 'localhost';
  $port = '5432';
  $dbname = 'relay_users';
  $user = 'postgres';
  $password = 'nothing';
  $dbconn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password")
    or die('Could not connect: ' . pg_last_error());
?>