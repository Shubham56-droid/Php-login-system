<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
  die("Sorry  failed  to connect  to the  server<br>".mysqli_connect_error());
}

?>