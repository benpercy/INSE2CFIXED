<?php
  include 'header.php';
 ?>
 <!-- Displays a message for mobile users-->
 <style type="text/css">
    .mobileShow { display: none; width:100%;height:100%;background-color: white;font-size: 3em;}
    /* Smartphone Portrait and Landscape */
    @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){ .mobileShow { display: inline;}}
 </style>
<!-- Message display for mobile users-->
 <div class="mobileShow">
 THIS WEBSITE DOES NOT FUNCTION CORRECTLY ON MOBILE. PLEASE USE A FULL HD DESKTOP.
 </div>
 <!-- Table used to store images -->
  <table class="images">
    <tr>
      <td>
        <!-- Image/ product link -->
      <a href="femaleDress1.php"><img src="images/Female dress 1.jpg" alt="Home1" style="width:304px;height:228px;"/></a>
      </td>
      <td>
        <!-- Image/ product link -->
      <a href="femaleDress2.php"><img src= "images/Female dress2.jpg" alt="Home2" style="width:304px;height:228px;"/></a>
      </td>
      </tr>
      <tr>
      <td>
        <!-- Image/ product link -->
      <a href="malePolo.php"><img src="images/Male polo.jpg" alt="Home3" style="width:304px;height:228px;"/></a>
      </td>
      <td>
        <!-- Image/ product link -->
      <a href="maleShirt1.php"><img src="images/Male shirt1.jpg" alt="Home4" style="width:304px;height:228px;"/></a>
      </td>
      </tr>
  </table>




<!-- Footer -->
    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
