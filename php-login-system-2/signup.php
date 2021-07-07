<?php
include 'dbconnect.php';
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $email = $_POST["email"];
  $pnumber = $_POST["pnumber"];
  $address = $_POST["address"];

  //  check  weather  username  exist  first
  $existssql = "SELECT * FROM `users` WHERE `username` = '$username'";
  $result = mysqli_query($conn,$existssql);
  $numexistsrows= mysqli_num_rows($result);
  if($numexistsrows > 0)
  {
    $showerror = "User name already exist";
  }
  //  check  weather  username  exist  first


  else
  {

          $exists = false;
          if(($password == $cpassword) )
          {

              $hash = password_hash($password, PASSWORD_DEFAULT);
              $sql = "INSERT INTO `users`(`username`,`password`,`dt`,`email`,`phonenum`,`address`) VALUES('$username','$hash',current_timestamp(),'$email','$pnumber','$address')";
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
    <title>SignUp to your account</title>
    <!---------------bootstrap css----------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


/*========= body and background used in  website =========*/
body {
  height: 100%;
  width: 100%;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-weight: 700;
  display: flex;
  justify-content: center;
  align-items: center;
  color: rgb(34, 34, 34);
  background-size: 100vw 100vh;
}

body::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: linear-gradient(
    45deg,
    #8400ff,
    #d900ff 50%,
    #00eaff 50%,
    #007ff6
  );
  z-index: -1;
}
body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: linear-gradient(
    160deg,
    #ffd900,
    #f40303 50%,
    transparent 50%,
    transparent
  );
  z-index: -1;
}

/*========= body and background used in  website =========*/

/*========= logo and logo-background used in  website =========*/
.login-div {
  width: 630px;
  height: 93%;
  backdrop-filter: blur(15px);
  padding: 15px 15px 15px 15px;
  background: rgba(255, 255, 255, 0.363);
  z-index: 100;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 70px;
}
.con
{
  
  display: flex;
  flex-direction:column;
  
}
.logo {
  position: relative;
  height: 120px;
  width: 120px;
  display: flex;
  padding-left:15px;
  justify-content: center;
  align-items: center;
  font-size: 60px;
  color: rgb(255, 255, 255);
  background: rgba(58, 58, 58, 0.397);
  border-radius: 50%;
  box-shadow: 0px 0px 2px #4e4e4e, 0px 0px 0px 5px #dde0e2, 8px 8px 15px #8f9194;
  margin: 0 auto;
}
.logo:hover {
  animation: animate 2s infinite;
  transition: 1s ease;
}
@keyframes animate {
  0% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(360deg);
  }
}
/*========= logo and logo-background used in  website =========*/

/*========= title and  heading used in  website =========*/
.title {
  text-align: center;
  margin-top: 3px;
  display: block;
}
.title h1 {
  color: rgb(255, 255, 255);
  font-size: 40px;
}
.title p {
  font-size: 18px;
  color: #363636;
}
/*========= title and  heading used in  website =========*/
/*========= fields  username and  passwords =========*/
.fields {
  width: 60%;
  padding: 25px 5px 5px 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  
  margin-left: 30px;
}

.fields input {
  border: none;
  outline: none;
  height:25px;
  width: 100%;
  background: none;
  font-size: 18px;
  color: rgb(32, 32, 32);
  padding: 20px 10px 20px 5px;

}
.username,
.password,
.cpassword,
.address,
.pnumber,
.email{

  border-radius: 35px;
  background: rgba(255, 255, 255, 0.52);
  padding-left: 10px;
  color: rgb(58, 57, 57);
  transition: 0.5s ease;
  margin-left: 10px;
  display: flex;
  margin:10px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.fields small
{
   margin-left: 30px;
   color: rgb(22, 22, 22);
}
.username span,
.password span,
.cpassword span,
.address span,
.pnumber span,
.email span
 {
  font-size: 21px;
  margin: 10px;
  font-weight: bold;
}

.username:hover,
.password:hover,
.cpassword:hover,
.address:hover,
.pnumber:hover,
.email:hover
{
  color: rgba(0, 0, 0, 0.863);
  background: #ffff;
}
/*========= fields  username and  passwords =========*/
/*========= it is used  for  signin button at bottom =========*/
.signin-button {
  border: none;
  margin-top: 15px;
  outline: none;
  font-size: 20px;
  font-weight: bold;
  color: rgb(255, 255, 255);
  cursor: pointer;
  width: 100%;
  height: 60px;
  border-radius: 30px;
  font-weight: 700;
  font-family: "Lato", sans-serif;
  text-align: center;
  background: rgb(0, 98, 255);
  transition: 0.5s ease;
}


.signin-button:hover {
  background: rgb(8, 238, 0);
  outline: none;
}
.login-div .sig {
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
  padding-top: 0.5em;
  font-size: 15px;
  font-family: sans-serif;
  color: #cccaca;
  transition: 0.5s ease;
}
.login-div a {
  text-decoration: none;
  display: flex;
  margin-left: 10px;
  align-items: center;
  justify-content: center;
  padding-top: 0.4em;
  font-size: 17px;
  font-family: sans-serif;
  color: #ffffff;
  transition: 0.5s ease;
}
.login-div a:hover
{
    color: #c2023b;
    font-weight: bold;
}

/*========= it is used  for  signin button at bottom =========*/
.back
{
  margin-left: -25%;
  margin-right: 25%;
  margin-bottom: 35%;
  height:100px;
  width:100px;
}
.back a i
{
  color:rgb(42, 42, 42);
  font-size: 50px;
}
.back a i:hover
{
  color: #ff0055;
}
</style>
<style>

.notification
{
        position: absolute;
        top:0;
        left: 45%;
    
}

</style>


</head>




<body>
<div class="notification">
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


</div>
    
    <div class="back">
        <a href="home.php"><i class="fas fa-chevron-circle-left"></i></a>
    </div>


<form action="/project-login-authentication/signup.php" method="post">
  <div class="login-div">
    <div class="con">
        <div class="logo"><i class="fas fa-user-plus"></i></div>
        <div class="title"><h1>Sign Up</h1><p>Create your account</p></div>
    </div>
        <br>
        <div class="fields">
            <div class="username">
                <span><i class="fas fa-user"></i></span>
                <input type="text" name="username" id="username" class="user-input" placeholder="Username">
            </div>

            <div class="password">
                <span><i class="fas fa-unlock-alt"></i></span>
                <input type="password" name="password" id="password" class="pass-input" placeholder="Password">
            </div>
            <div class="cp" style="width:270px; text-align:center;">
            <div class="cpassword">
                <span><i class="fas fa-unlock-alt"></i></span>
                <input type="password" name="cpassword" id="cpassword" class="cpass-input" placeholder="Confirm Password">
                
            </div>
            <small>Password and confirm password should be same</small>
            </div>


            <div class="email">
                <span><i class="fas fa-envelope-open-text"></i></i></span>
                <input type="email" name="email" id="email" class="email-input" placeholder="Email Address">
            </div>

            <div class="pnumber">
                <span><i class="fas fa-phone-alt"></i></span>
                <input type="tel" name="pnumber" id="pnumber" class="pnumber-input" placeholder="Phone number">
            </div>
            
            <div class="address">
                <span><i class="fas fa-map-marked-alt"></i></span>
                <input type="text" name="address" id="address" class="address-input" placeholder="Address">
            </div>
 
        </div>
        
        <button class="signin-button" type="submit">Create account</button>
        <span class="sig">Already have an account</span><a href="\project-login-authentication\login.php">Login</a>
        
    </div>
</form>
<!---------------------------------------------JAVASCRIPT BUNDLE------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

