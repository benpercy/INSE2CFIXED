<?php
  include 'header.php';
 ?>

<head>
    <link rel="css/main.css" type="text/css" href="main.css">
</head>


<article>
  <form action="includes/topup.inc.php" class="topupTable" method="POST">
    <input type="text" name="username" value="<?php
    if (isset($_SESSION['id'])) {
      echo $_SESSION['username'];
    } else {
      echo "ERROR!";
    }
    ?>" readonly><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="text" name="cardNo" placeholder="Credit/Debt Card #"><br>
    <input type="text" name="cardSecurity" placeholder="Card Security #"><br>
    <input type="text" name="topUp" placeholder="Topup Amount(£)"><br>
    <button type ="submit">Confirm</button>
  </form>
  Note: You will have to logout and back in for the new credit to show.
</article>





    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
