<?php


$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'partial/_dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];

//$sql = "Select * from users where username='$username' AND password='$password'";
$sql = "Select * from users where username='$username'";

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num == 1)
{
    while($row=mysqli_fetch_assoc($result))
    {
        if(password_verify($password,$row['password']))  // check  that  psssword enter hash and  the  hash  password  stored in  database  is  true  of  not 
        {
            $login = true;
            $login= true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php");  // func  to redirect 
        }
        else
        {
            $showerror = true;
        }
        
    }
   
}
else
{
    $showerror = true;
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_page</title>
    <!---------------bootstrap css----------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    *
    {
      margin:0;
      padding:0;
      box-sizing:border-box;

    }

    .container form,
    .container h1
    {
      display:flex;
      flex-direction: column;
      align-items: center;
    }

   
    </style>


</head>
<body>

<?php
require 'partial/_navbar.php';
?>

<?php

if($login)
{
echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your are logged in.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if($showerror)
{
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Failed!</strong> Invalid Credentials.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="container my-4">
<h1>Login to our website</h1>
<form  action="/project-login-system/login.php" method="post">
  <div class="mb-3 col-md-4">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
   
  </div>

  <div class="mb-3 col-md-4">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="mb-3 my-3 col-md-4" style="display: flex; justify-content:center; align-items:center;">
  <button type="submit" class="btn btn-primary">Login</button>
  
  </div>
</form>
</div>

<!---------------------------------------------JAVASCRIPT BUNDLE------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>