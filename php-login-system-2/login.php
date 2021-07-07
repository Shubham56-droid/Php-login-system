<?php

$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'dbconnect.php';
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
    <title>Login to your account</title>
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
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(34, 34, 34);
            background-size: 100vw 100vh;
            transition: 0.75s;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(45deg,
                    #000dbe,
                    #9b00b6 50%,
                    #ff004c 50%,
                    #f6c900);
            z-index: -1;
            transition: 0.75s;
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(160deg,
                    #0059ff,
                    #03f4c0 50%,
                    transparent 50%,
                    transparent);
            z-index: -1;
            transition: 0.75s;
        }

        /*========= body and background used in  website =========*/

        /*========= logo and logo-background used in  website =========*/
        .login-div {
            width: 430px;
            height: 600px;
            backdrop-filter: blur(15px);
            padding: 35px 35px 35px 35px;
            background: rgba(255, 255, 255, 0.411);
            z-index: 100;
            transition: 0.75s;
        }

        .logo {
            height: 120px;
            width: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 60px;
            color: rgb(255, 255, 255);
            background: rgba(58, 58, 58, 0.397);
            border-radius: 50%;
            box-shadow: 0px 0px 2px #4e4e4e, 0px 0px 0px 5px #dde0e2, 8px 8px 15px #8f9194;
            margin: 0 auto;
            transition: 0.75s;
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
            margin-top: 6px;
            transition: 0.75s;
        }

        .title h1 {
            color: rgb(255, 255, 255);
            font-size: 40px;
            transition: 0.75s;
        }

        .title p {
            font-size: 18px;
            color: #363636;
        }

        /*========= title and  heading used in  website =========*/
        /*========= fields  username and  passwords =========*/
        .feilds {
            width: 100%;
            padding: 75px 5px 5px 5px;
        }

        .fields input {
            border: none;
            outline: none;
            background: none;
            font-size: 18px;
            color: rgb(32, 32, 32);
            padding: 20px 10px 20px 5px;
        }

        .username,
        .password {
            margin-bottom: 30px;
            border-radius: 35px;
            background: rgba(255, 255, 255, 0.52);
            padding-left: 10px;
            color: rgb(73, 72, 72);
            transition: 0.5s ease;
        }

        .username span,
        .password span {
            font-size: 21px;
            margin: 10px;
            font-weight: bold;
        }

        .username:hover,
        .password:hover {
            color: rgba(0, 0, 0, 0.863);
            background: #ffff;
        }

        /*========= fields  username and  passwords =========*/
        /*========= it is used  for  signin button at bottom =========*/
        .signin-button {
            border: none;
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
            background: rgb(0, 89, 255);
            transition: 0.5s ease;
        }


        .signin-button:hover {
            background: rgb(24, 207, 0);
            outline: none;
            overflow: hidden;
        }

        .login-div .sig {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 0.5em;
            font-size: 15px;
            font-family: sans-serif;
            color: #bebebe;
            transition: 0.5s ease;
        }

        .login-div a {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 0.3em;
            font-size: 17px;
            font-family: sans-serif;
            color: #ffffff;
            transition: 0.5s ease;
        }

        .login-div a:hover {
            color: #cf0011;
        }

        /*========= it is used  for  signin button at bottom =========*/

        .back {
            margin-left: -30%;
            margin-right: 30%;
            margin-bottom: 38%;
            height: 100px;
            width: 100px;
        }

        .back a i {
            color: rgb(42, 42, 42);
            font-size: 50px;
        }

        .back a i:hover {
            color: #ffc400;
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

</div>


    <div class="back">
        <a href="home.php"><i class="fas fa-chevron-circle-left"></i></a>
    </div>

<form action="/project-login-authentication/login.php" method="post">
    <div class="login-div">

        <div class="logo"><i class="fas fa-user"></i></div>
        <div class="title">
            <h1>Sign In</h1>
            <p>login to your account</p>
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
        </div>
        <button class="signin-button" type="submit">Login</button>
        <span class="sig">or signup using</span><a href="\project-login-authentication\signup.php">Sign up</a>
    </div>
    </form>


<!---------------------------------------------JAVASCRIPT BUNDLE------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>


