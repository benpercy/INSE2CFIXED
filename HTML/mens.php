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


<table class="images">
      <tr>
	<td>
	<img src="images/Male cardigan 1.jpg" alt="Cardigan1" style="width:304px;height:228px;"/><br>
	 Grey male cardigan - £24.99
	</td>
      	<td>
	<img src="images/Male jacket1.jpg" alt="Malejacket1" style="width:304px;height:228px;"/><br>
	  Brown male jacket - £30.00
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Male long sleeve1.jpg" alt="Longsleeve1" style="width:304px;height:228px;"/><br>
	  Grey long sleeve tshirt - £10.00
	</td>
      	<td>
	<img src="images/Male longsleeve2.jpg" alt="Longsleeve2" style="width:304px;height:228px;"/><br>
	  Light grey long sleeve tshirt - £9.50
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Male long sleeve3.jpg" alt="Longsleeve3" style="width:304px;height:228px;"/><br>
	 Black/ colour sleeves - £11.99
	</td>
      <td>
	<img src="images/Male long sleeve 4.jpg" alt="Longsleeve4" style="width:304px;height:228px;"/><br>
	  Navy blue long sleeve  - £10.99
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Male polo.jpg" alt="Polo" style="width:304px;height:228px;"/><br>
	 Grey polo with pocket - £15.00
	</td>
      	<td>
	<img src="images/Male shirt1.jpg" alt="shirt1" style="width:304px;height:228px;"/><br>
	 White with black strips - £35.99
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Male shirt2.jpg" alt="shirt2" style="width:304px;height:228px;"/><br>
	  Black with white strips - £35.99
	</td>
      	<td>
	<img src="images/Male shirt3.jpg" alt="shirt3" style="width:304px;height:228px;"/><br>
	 Plain white shirt - £20.00
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Male shirt4.jpg" alt="shirt4" style="width:304px;height:228px;"/><br>
	  Blue checkered shirt - £30.00
	</td>
      	<td>
	<img src="images/Male sweatshirt1.jpg" alt="sweatshirt1" style="width:304px;height:228px;"/><br>
	  Red sweatshirt with a hoodie - £23.99
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Male sweatshirt2.jpg" alt="sweatshirt2" style="width:304px;height:228px;"/><br>
	  Grey strippeed sweatshirt - £20.99
	</td>
      	<td>
	<img src="images/Male sweatshirt3.jpg" alt="sweatshirt3" style="width:304px;height:228px;"/><br>
	 Blue/white aztec design sweatshirt - £17.99
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Male tshirt 1.jpg" alt="Mtshirt1" style="width:304px;height:228px;"/><br>
	 White/blue tshirt - £9.99
	</td>
      	<td>
	<img src="images/Male tshirt2.jpg" alt="Mtshirt2" style="width:304px;height:228px;"/><br>
	 Grey plain tshirt - £5.99
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Male tshirt3.jpg" alt="Mtshirt3" style="width:304px;height:228px;"/><br>
	 Navy blue tshirt - £6.99
	</td>
      	<td>
	<img src="images/Male tshirt4.jpg" alt="Mtshirt4" style="width:304px;height:228px;"/><br>
	  Light blue plain tshirt - £5.99
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Male tshirt5.jpg" alt="Mtshirt5" style="width:304px;height:228px;"/><br>
	  Green stripped tshirt - £6.99
	</td>
      	<td>
	<img src="images/Male tshirt6.jpeg" alt="Mtshirt6" style="width:304px;height:228px;"/><br>
	  Grey USA tshirt - £7.99
	</td>
	</tr>






  <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
