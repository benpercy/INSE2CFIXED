<?php
  session_start();
 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UniTrend - Login</title>


    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
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

    <section>
      <article>
        <form action="login.php" method="POST">
          <input type="text" name="username" placeholder="Username"><br>
          <input type="password" name="pass" placeholder="Password"><br>
          <button type ="submit">Login</button>
        </form>
      </article><br><br><br>

        <article>
          <form action="register.php" method="POST">
            <input type="text" name="title" placeholder="Title"><br>
            <input type="text" name="first" placeholder="Firstname"><br>
            <input type="text" name="last" placeholder="Lastname"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="text" name="firstAdd" placeholder="FirstAdd"><br>
            <input type="text" name="post" placeholder="Postcode"><br>
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <button type ="submit">Register</button>

          </form>
        </article>
    </section>

<section>
  <article>
    <form action="logout.php">
    <button>Log Out</button>
  </form>
  </article>
</section>




    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>


    <script src="js/scripts.js"></script>
</body>

</html>
