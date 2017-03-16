<?php
  session_start();
 ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UniTrend</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="images/favicon.png">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>

<body>
    <header>
        <a class="headerImgA" href="index.html"><img src="images/banner.png" class="headerImg"></a>
        <div id="topbar">
            <a class="alignleft" href="topup.html">$</a>
            <?php
              if(isset($_SESSION['id'])){
                ?>
                <a class="aligncenter" href="register.php">Logout</a><?php
              } else {
                ?>
                <a class="aligncenter" href="register.php">Login</a><?php
              }
             ?>
            <a class="alignright" href="cart.html">Cart</a>
        </div>
    </header>

    <ul>
        <li><a href="products/mens/">Mens</a></li>
        <li><a href="products/womans/">Womans</a></li>
        <li><a href="products/accessories/">Accessories</a></li>
    </ul>





    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>


    <script src="js/scripts.js"></script>
</body>

</html>
