<?php
echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Login-Authentication-System</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Pattaya&display=swap");

*
{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:"Poppins", sans-serif;
}

body
{
    display: flex;
    justify-content: left;
    min-height: 100vh;
    overflow: hidden;
}
body::before
{
    content:" ";
    position:absolute;
    top:0;
    left:0;
    height:100%;
    width:100%;
    background:linear-gradient(45deg,#000dbe,#9b00b6 50%, #ff004c 50%,#f6c900 );
    z-index: -20;
}
body::after
{
    content:" ";
    position:absolute;
    top:0;
    left:0;
    height:100%;
    width:100%;
    background:linear-gradient(160deg,#0059ff,#03f4c0 50%, transparent 50%, transparent );
    z-index: -20;
}
.container
{
    position: fixed;
    backdrop-filter:blur(14px);
    background: rgba(255, 255, 255, 0.541);
    margin-top:20px;
    height: auto;
    width: 100px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    z-index: 2;
    padding: 3px;
    border-radius: 65px;
    margin-left: 5px;
}
ul
{
position: relative;
padding:20px;
width:350px;
display: flex;
flex-direction: column;
margin-left: 10px;
}

ul li
{
    position: relative;
    padding: 2px;
    list-style: none;
    background: rgba(255, 255, 255, 0.308);
    border-radius: 35px;
    margin:5px;
    transition: 0.7s;
   
}
ul li:hover
{
    box-shadow: 0 10px 30px rgba(0,0,0,0.6);
    background: rgba(255, 255, 255, 0.698);
}

ul li a
{
    text-decoration: none;
    display: flex;
    
}
ul li a .icon
{
    width: 60px;
    height: 40px;
    text-align: center;
    overflow: hidden;
    margin:10px;
    
}
ul li a .icon .fas
{
    width: 100%;
    height: 100%;
    line-height: 40px;
    font-size: 34px;
    color:rgb(24, 24, 24);
    transition: 0.5s;
}

ul li a .icon .fas:last-child
{
    color: #ff0022;
}

ul li a:hover .icon .fas
{
    transform: translateY(-100%);
}
ul li a:hover .icon .fas:last-child
{
    transform: translateY(-100%);
}

ul li a .name
{
    position: relative;
    top: 20px;
    height:20px;
    width: 100%;
    display: block;
    overflow: hidden;
}
ul li a .name span
{
    display: block;
    position: relative;
    color: rgb(19, 18, 18);
    font-weight: 500;
    font-size: 18px;
  
    line-height: 20px;
    transition:0.5s;
}
ul li a .name span::before
{
    content: attr(data-text);
    position: absolute;
    top:-100%;
    left:0;
    width:100%;
    height:100%;
    color: rgb(255, 9, 58);
}

ul li a:hover .name span
{
    transform: translateY(100%);
    
}
    </style>

</head>

<body>
    <div class="container">
    
    <ul>
        <li>
            <a href="\project-login-authentication\home.php">
                <div class="icon">
                    <i class="fas fa-home"></i>
                    <i class="fas fa-home"></i>
                </div>
                <div class="name"><span data-text="Home">Home</span></div>

            </a>
        </li>

        <li>
            <a href="\project-login-authentication\about.php">
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="name"><span data-text="About Us">About Us</span></div>

            </a>
        </li>

        <li>
            <a href="\project-login-authentication\project.php">
                <div class="icon">
                    <i class="fas fa-users-cog"></i>
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="name"><span data-text="Projects">Projects</span></div>

            </a>
        </li>



        <li>
            <a href="\project-login-authentication\team.php">
                <div class="icon">
                    <i class="fas fa-users"></i>
                    <i class="fas fa-users"></i>
                </div>
                <div class="name"><span data-text="Team">Team</span></div>
            </a>
        </li>

        <li>
            <a href="\project-login-authentication\contact.php">
                <div class="icon">
                    <i class="fas fa-address-book"></i>
                    <i class="fas fa-address-book"></i>
                </div>
                <div class="name"><span data-text="Contact">Contact</span></div>
            </a>
        </li>

        <li>
            <a href="\project-login-authentication\login.php">
                <div class="icon">
                    <i class="fas fa-address-book"></i>
                    <i class="fas fa-address-book"></i>
                </div>
                <div class="name"><span data-text="Login">Login</span></div>
            </a>
        </li>

        <li>
            <a href="\project-login-authentication\signup.php">
                <div class="icon">
                    <i class="fas fa-address-book"></i>
                    <i class="fas fa-address-book"></i>
                </div>
                <div class="name"><span data-text="Sign Up">Sign Up</span></div>
            </a>
        </li>
    </ul>
</div>
</body>

</html>';
?>