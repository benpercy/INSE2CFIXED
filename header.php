<?php
//Starts a web session
  session_start();
 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UniTrend</title>

    <!-- Css Links -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

</head>
<body>

<header>
  <!-- Login form -->
        <form action="includes/login.inc.php" method="POST">
          <input type="text" name="username" placeholder="Username"><br>
          <input type="password" name="pass" placeholder="Password"><br>
          <button type ="submit">Login</button>
        </form>
        <!-- Logout button -->
        <div align="right">
          <div style="margin-top:-33px;margin-right:10px;">
          <form action="includes/logout.inc.php" method="POST">
            <button>Log Out</button>
          </form>
          <!-- Displays user's username and their current account balance. -->
          <?php
          if (isset($_SESSION['id'])) {
            echo "Welcome back <b>". $_SESSION['username'] . "</b>! Account credit: £<b>". $_SESSION['credit']."</b>.";
          } else {
            echo "You are not logged in";
          }
          ?>
        <!-- UniTrend banner -->
        </div>
                <a href="index.php"><img src="images/banner.png"/></a></div>
        </header>

      <!-- Website Navigation -->
        <nav>
          <ul>
            <li><a href="mens.php">Mens</a></li>
            <li><a href="womans.php">Womans</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="topup.php">$ Top Up</a></li>
          </ul>

          <!-- Cart icon -->
          <a href="index.php"><img class="right" src="images/cart.png"/></a>
        </nav>
