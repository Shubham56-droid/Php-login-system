<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-<?php $_SESSION['username']?></title>
    <link rel="stylesheet" href="can.css">
    <style>
        *
{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
body
{
    height: 100vh;
    width:100%;
    overflow: hidden;
}
body::before
{
  content:'';
  position: absolute;
  top:0;
  left:0;
  bottom:0;
  right: 0;
  background:linear-gradient(rgb(255, 0, 85) ,rgb(17, 0, 255));
}
.header
{
    position:sticky;
    height: 50px;
    width: 270px;
    background: rgba(255, 255, 255, 0.068);
    backdrop-filter: blur(65px);
    top: 10px;
}
.header ul
{
   margin:5px;
    padding:10px;
}
.header ul li
{
   margin: 10px;
   text-align: center;
   padding:15px;
   list-style: none;
   background: rgba(255, 255, 255, 0.431);
   border-radius: 25px;
}
.header ul li:hover
{
 
   background: rgba(255, 255, 255, 0.828);
}
.header ul li a
{
    text-decoration: none;
    font-size:20px;
    color: rgb(0, 0, 0);
    font-weight: 700;
}

#log
{
    color: red;
    font-weight: 700;

}

.container
{
    position: relative;
    z-index: 10;
    height: 500px;
    width: 700px;
   backdrop-filter: blur(65px);
   background: rgba(253, 253, 253, 0.178);
    padding: 40px;
    text-align: center;
    margin-left: 40%;
}
.content
{
    position: relative;
    margin: 20px;
    padding: 40px;
    height: 370px;
    background: rgba(255, 255, 255, 0.171);
}

.content h1
{
    color: rgb(0, 255, 242);
    font-size: 42px;
    font-weight: 700;
}

.content h2
{
    color: rgb(0, 255, 21);
    font-size: 32px;
    font-weight: 600;
}

.content p
{
    color: rgb(255, 255, 255);
    font-size: 22px;
    margin-top: 20px;
}

    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="#">Profile</a></li>  
            <li><a href="#">Your gist</a></li>
            <li><a href="#">Account info</a></li>
            <li><a href="#">Your Account</a></li>
            <li><a href="#">Your Projects</a></li>
            <li><a href="logout.php" id="log">Logout</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="content">
            <h1><?php
                echo'<h1>Welcome-'.$_SESSION['username'].'</h1>';
                ?></h1>
            <h2>You have logged in into your account</h2>
            <p>The project of  login authentication successfully worked pls give us good marks it requires lot of hardwork, time and effort to complete this project hope you like it thank you.</p>
    </div>
    

</body>
</html>