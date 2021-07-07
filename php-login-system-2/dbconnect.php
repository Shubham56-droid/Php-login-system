<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("Sorry Failed To Connect To The Server, Pls Try To ReLoad.<br>".mysqli_connect_error());
}
