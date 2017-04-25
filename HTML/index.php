<?php
  include 'header.php';
 ?>


<h1>this is the index page</h1>

<?php
if (isset($_SESSION['id'])) {
  echo "You are logged in, your ID is: ". $_SESSION['id'];
} else {
  echo "You are not logged in";
}
?>


  <container class="images">
      <img src="images/Female dress 1.jpg" alt="Home1" style="width:304px;height:228px;"/>
      <img src= "images/Female dress 2.jpg" alt="Home2" style="width:304px;height:228px;"/>
      <img src="images/Male polo.jpg" alt="Home3" style="width:304px;height:228px;"/>
      <img src="images/Male shirt1.jpg" alt="Home4" style="width:304px;height:228px;"/>
  </container>





    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
