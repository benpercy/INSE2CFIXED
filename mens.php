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
	<img src="images/Malecardigan1.jpg" alt="Cardigan1" style="width:304px;height:228px;"/>
	<caption> Grey male cardigan - £24.99</caption>
	</td>
      	<td>
	<img src="images/Malejacket1.jpg" alt="Malejacket1" style="width:304px;height:228px;"/>
	<caption> Brown male jacket - £30.00</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Malelongsleeve1.jpg" alt="Longsleeve1" style="width:304px;height:228px;"/>
	<caption> Grey long sleeve tshirt - £10.00</caption>
	</td>
      	<td>
	<img src="images/Malelongsleeve2.jpg" alt="Longsleeve2" style="width:304px;height:228px;"/>
	<caption> Light grey long sleeve tshirt - £9.50</caption>
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Malelongsleeve3.jpg" alt="Longsleeve3" style="width:304px;height:228px;"/>
	<caption> Black with designs on the sleeves - £11.99</caption>
	</td>
      <td>
	<img src="images/Malelongsleeve4.jpg" alt="Longsleeve4" style="width:304px;height:228px;"/>
	<caption> Navy blue long sleeve  - £10.99</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Malepolo.jpg" alt="Polo" style="width:304px;height:228px;"/>
	<caption> Grey polo with pocket - £15.00</caption>
	</td>
      	<td>
	<img src="images/Maleshirt1.jpg" alt="shirt1" style="width:304px;height:228px;"/>
	<caption> White with black strips - £35.99</caption>
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Maleshirt2.jpg" alt="shirt2" style="width:304px;height:228px;"/>
	<caption> Black with white strips - £35.99</caption>
	</td>
      	<td>
	<img src="images/Maleshirt3.jpg" alt="shirt3" style="width:304px;height:228px;"/>
	<caption> Plain white shirt - £20.00</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Maleshirt4.jpg" alt="shirt4" style="width:304px;height:228px;"/>
	<caption> Blue checkered shirt - £30.00</caption>
	</td>
      	<td>
	<img src="images/Malesweatshirt1.jpg" alt="sweatshirt1" style="width:304px;height:228px;"/>
	<caption> Red sweatshirt with a hoodie - £23.99</caption>
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Malesweatshirt2.jpg" alt="sweatshirt2" style="width:304px;height:228px;"/>
	<caption> Grey strippeed sweatshirt - £20.99</caption>
	</td>
      	<td>
	<img src="images/Malesweatshirt3.jpg" alt="sweatshirt3" style="width:304px;height:228px;"/>
	<caption> Blue/white aztec design sweatshirt - £17.99</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Maletshirt1.jpg" alt="Mtshirt1" style="width:304px;height:228px;"/>
	<caption> White/blue tshirt - £9.99</caption>
	</td>
      	<td>
	<img src="images/Maletshirt2.jpg" alt="Mtshirt2" style="width:304px;height:228px;"/>
	<caption> Grey plain tshirt - £5.99</caption>
	</td>
	</tr>
	<table class="images">
      <tr>
	<td>
	<img src="images/Maletshirt3.jpg" alt="Mtshirt3" style="width:304px;height:228px;"/>
	<caption> Navy blue tshirt - £6.99</caption>
	</td>
      	<td>
	<img src="images/Maletshirt4.jpg" alt="Mtshirt4" style="width:304px;height:228px;"/>
	<caption> Light blue plain tshirt - £5.99</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Maletshirt5.jpg" alt="Mtshirt5" style="width:304px;height:228px;"/>
	<caption> Green stripped tshirt - £6.99</caption>
	</td>
      	<td>
	<img src="images/Maletshirt6.jpg" alt="Mtshirt6" style="width:304px;height:228px;"/>
	<caption> Grey USA tshirt - £7.99</caption>
	</td>
	</tr>






  <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>