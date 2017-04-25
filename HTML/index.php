<?php
  include 'header.php';
 ?>

<head>
    <link rel="css/main.css" type="text/css" href="main.css">
</head>
<h1>this is the index page</h1>

<?php
if (isset($_SESSION['id'])) {
  echo "You are logged in, your ID is: ". $_SESSION['id'];
} else {
  echo "You are not logged in";
}
?>


  <table class="images">
    <tr>
      <td>
      <img src="images/Female dress 1.jpg" alt="Home1" style="width:304px;height:228px;"/>
      </td>
      <td>
      <img src= "images/Female dress 2.jpg" alt="Home2" style="width:304px;height:228px;"/>
      </td>
      </tr>
      <tr>
      <td>
      <img src="images/Male polo.jpg" alt="Home3" style="width:304px;height:228px;"/>
      </td>
      <td>
      <img src="images/Male shirt1.jpg" alt="Home4" style="width:304px;height:228px;"/>
      </td>
      </tr>
  </table>





    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
