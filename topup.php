<?php
  include 'header.php';
 ?>

<!-- Topup Form-->
<div style="width: 300px; margin: 0 auto;">
<article>
  <form action="includes/topup.inc.php" class="topupTable" method="POST">
    <input type="text" name="username" value="<?php
    //Automatic username pull
    if (isset($_SESSION['id'])) {
      echo $_SESSION['username'];
    } else {
      echo "Not logged in";
    }
    ?>" readonly>
    <br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="text" name="cardNo" placeholder="16 Digit Credit/Debt Card #"><br>
    <input type="text" name="cardSecurity" placeholder="3 Digit Card Security #"><br>
    <input type="text" name="topUp" placeholder="Topup Amount(£)"><br>
    Accept T&Cs<input type="checkbox" name="check" value="value1">
    <button type ="submit">Confirm</button>
  </form>

</article>
</div>
<!-- Information -->
  <p id="notice">Note: You will have to logout and back in for the new credit to show.</p>




<!-- Footer -->
    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
