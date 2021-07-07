<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .head {
        width: 60%;
        backdrop-filter: blur(5px);
        z-index: 100;
        margin-left: 30%;
        margin-top: 60px;
        padding: 30px 30px 30px 30px;
        height: 600px;
        background: rgba(255, 255, 255, 0.061);
    }

    .head .heading {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
        background: rgba(255, 255, 255, 0.233);
      
 
    }

    .head .heading h1 {
        text-align: center;
        margin: 10px;
        color: rgb(255, 255, 255);
        font-size: 40px;
    }

    .head .heading p {
        text-align: left;
        margin: 10px;
        color: rgb(0, 0, 0);
        font-size: 20px;
        font-weight: bold;
    }

    .head .heading span {
        color: rgb(255, 0, 0);
        font-weight: bold;
    }

    .effect1 {
        height: 200px;
        width: 200px;
        position: absolute;
        border-left: 15px solid rgb(251, 255, 0);
        border-right: 15px solid rgb(255, 0, 85);
        border-bottom: 15px solid rgb(251, 255, 0);
        border-top: 15px solid rgb(255, 0, 55);
        margin-left: 75%;
        margin-top: 2%;

        animation: animate 5s linear infinite;
    }

    .effect2 {
        height: 150px;
        width: 150px;
        position: absolute;
        border-left: 13px solid rgb(251, 255, 0);
        border-right: 13px solid rgb(255, 0, 85);
        border-bottom: 13px solid rgb(251, 255, 0);
        border-top: 13px solid rgb(255, 0, 55);

        margin-left: 67%;
        margin-top: 12%;
        animation: animate 5s linear infinite;
    }

    .effect3 {
        height: 130px;
        width: 130px;
        position: absolute;
        border-left: 13px solid rgb(0, 153, 255);
        border-right: 13px solid rgb(38, 0, 255);
        border-bottom: 13px solid rgb(0, 153, 255);
        border-top: 13px solid rgb(25, 0, 255);

        margin-left: 77%;
        margin-top: 16%;
        animation: animate 5s linear infinite;
    }

    .effect4 {
        height: 90px;
        width: 90px;
        position: absolute;
        border-left: 13px solid rgb(4, 0, 255);
        border-right: 13px solid rgb(0, 119, 255);
        border-bottom: 13px solid rgb(68, 0, 255);
        border-top: 13px solid rgb(0, 110, 255);

        margin-left: 68%;
        margin-top: 22%;
        animation: animate 5s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: rotateZ(0deg);
        }

        100% {
            transform: rotateZ(359deg);
        }
    }
    </style>
</head>

<body>
    <div class="home">
        <div class="effect1"></div>
        <div class="effect2"></div>
        <div class="effect3"></div>
        <div class="effect4"></div>
        <div class="head">
            <div class="heading">
                <h1>About Us</h1>
                <p>Our Team has worked on this project equally. We are the group 4 student from Chandigard University.
                    We have succesfully created a Login-Authentication-System project as per our summer traning
                    project.It is a succesfull contribution of teamwork ,hard work and cooperation among us.We are very
                    thankful to our teacher who has guided us throught-out the journey of traning sesssion of learning
                    Webdevelopemnt and DBMS.
                </p>
                <h2 style="color:#fff;">Software Used</h2>
                <div class="img-s">
                <img src="html-css.png" style="height:150px; width:200px">
                <img src="php.png" style="height:125px; width:250px">
                <img src="phpmyadmin.png" style="height:125px; width:220px">
                </div>
            </div>
        </div>
</body>

</html>

