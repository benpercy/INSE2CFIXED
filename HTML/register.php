<?php
  include 'header.php';
 ?>
        <article>
          <form action="includes/signup.inc.php" method="POST">
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

<?php
if (isset($_SESSION['id'])) {
  echo $_SESSION['id'];
} else {
  echo "You are not logged in";
}
?>

    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>


    <script src="js/scripts.js"></script>
</body>

</html>
