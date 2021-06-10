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
    <!---------------bootstrap css----------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<?php
require 'partial/_navbar.php';
?>

<div class="container2  my-4" style="display:flex; flex-direction:column; align-items:center;">
        <?php
        echo'<h3>Welcome-'.$_SESSION['username'].'</h3>';
        ?>
</div>

<div class="container">


            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done! <?php echo $_SESSION['username']?></h4>
            <p>hey! how are you doning ? Welcome to the isecure you are logged in as username - <?php echo $_SESSION['username']?> Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to logout <a href="/project-login-system/logout.php">using this link</a></p>
            </div>

</div>
<!---------------------------------------------JAVASCRIPT BUNDLE------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>