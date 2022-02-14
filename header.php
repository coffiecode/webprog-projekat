<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Social Network</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar">
        <a href="index.php" id="logo"><i class="fas fa-archway"></i></a>
        <ul>
          <li><a href="index.php">Home Page</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
            if(isset($_SESSION["userid"])){
              echo "<li><a href='profile.php'>My Profile</a></li>";
              echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
            }
            else{
              echo "<li><a href='login.php'>Log In</a></li>";
              echo "<li><a href='signup.php'>Sign Up</a></li>";
            }
          ?>
        </ul>
    </nav>