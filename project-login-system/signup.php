<?php

include 'partial/_dbconnect.php';
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];

  //  check  weather  username  exist  first
  $existssql = "SELECT * FROM `users` WHERE `username` = '$username'";
  $result = mysqli_query($conn,$existssql);
  $numexistsrows= mysqli_num_rows($result);
  if($numexistsrows > 0)
  {
    $showerror = "User name already exist";
  }
  else
  {

          $exists = false;
          if(($password == $cpassword) )
          {

              $hash = password_hash($password, PASSWORD_DEFAULT);
              $sql = "INSERT INTO `users`(`username`,`password`,`dt`) VALUES('$username','$hash',current_timestamp())";
              $result = mysqli_query($conn,$sql);
              if($result)
              {
                $showalert= true;
              }
          }
          else
          {
              $showerror = "Password do not  match";
          }
 }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup_page</title>
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

if($showalert)
{
echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your account is created now you can login.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if($showerror)
{
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Failed!</strong> '.$showerror.'
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="container my-4">
<h1>Signup to our website</h1>
<form  action="/project-login-system/signup.php" method="post">
  <div class="mb-3 col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
   
  </div>

  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" maxlength="11" class="form-control" id="password" name="password">
  </div>

  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" maxlength="11" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
  </div>


  <div class="mb-3 col-md-6">
  <button type="submit" class="btn btn-primary">Signup</button>
  <button type="reset" class="btn btn-primary">Reset</button>
  </div>
</form>
</div>

<!---------------------------------------------JAVASCRIPT BUNDLE------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>