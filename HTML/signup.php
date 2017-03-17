<?php
  include 'header.php';
 ?>
<br><br><br>

<?php
if (isset($_SESSION['id'])) {
  echo $_SESSION['id'];
} else {
  echo "You are not logged in";
}
?>

<section>
  <article>
    <br><br><br>
    <form action="includes/logout.inc.php">
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
