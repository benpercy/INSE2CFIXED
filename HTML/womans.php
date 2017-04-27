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
	<img src="images/Femaledress1.jpg" alt="Dress1" style="width:304px;height:228px;">
	<caption> White and brown patterned midi length dress - £18.99</caption>
	</td>
      	<td>
	<img src="images/Femaledress2.jpg" alt="Dress2" style="width:304px;height:228px;"/>
	<caption> Stripped dress, pink, white, blue - £10.00</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Femaledress3.jpg" alt="Dress3" style="width:304px;height:228px;"/>
	<caption> Plain medium lengthen dress. Available in white and pink - £13.99</caption>
	</td>
      	<td>
	<img src="images/Femaledress4.jpg" alt="Dress4" style="width:304px;height:228px;"/>
	<caption> Red party dress - £15.99</caption>
	</td>
	</tr>
      	<tr>
	<td>
	<img src="images/Femaledress5.jpg" alt="Dress5" style="width:304px;height:228px;"/>
	<caption> Black lacey party dress - £25.00</caption>
	</td>
      	<td>
	<img src="images/Femaledress6.jpg" alt="Dress6" style="width:304px;height:228px;"/>
	<caption> Black and white stripped dress - £20.00</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Femaledress7.jpg" alt="Dress7" style="width:304px;height:228px;"/>
	<caption> Maroon/purple miid prom dress - £40.00</caption>
	</td>
      	<td>
	<img src="images/Femaledress8.jpg" alt="Dress8" style="width:304px;height:228px;"/>
	<caption> Black midi lacey informal dress - £20.99</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Femalehoodie1.jpg" alt="Female Hoodie1" style="width:304px;height:228px;"/>
	<caption> Army green hoodie - £8.50</caption>
	</td>
      	<td>
	<img src="images/Femalejacket1.jpg" alt="Jacket1" style="width:304px;height:228px;"/>
	<caption> Black suede jacket - £9.99</caption>
	</td>
	</tr>
      	<tr>
	<td>
	<img src="images/Femalejacket2.jpg" alt="Jacket2" style="width:304px;height:228px;"/>
	<caption> Grey formal jacket - £9.99</caption>
	</td>
      	<td>
	<img src="images/Femaleshirt1.jpg" alt="Shirt1" style="width:304px;height:228px;"/>
	<caption> Light blue aztec shirt - £10.00</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Femaleshirt2.jpg" alt="Shirt2" style="width:304px;height:228px;"/>
	<caption> Colour patterend shirt - £10.99</caption>
	</td>
      	<td>
	<img src="images/Femaleshirt3.jpg" alt="Shirt3" style="width:304px;height:228px;"/>
	<caption> Flower patterned white and grey shirt - £10.99</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Femaleshirt4.jpg" alt="Shirt4" style="width:304px;height:228px;"/>
	<caption> Pink flower design black shirt - £11.99</caption>
	</td>
      	<td>
	<img src="images/Femalesuit1.jpg" alt="Suit1" style="width:304px; height:228px;"/>
	<caption> Navy blue women suit - £35.99</caption>
	</td>
	</tr>
      	<tr>
	<td>
	<img src="images/Femalesweatshirt1.jpg" alt="sweatshirt1" style="width:304px;height:228px;"/>
	<caption> White and red stripped sweatshirt - £12.50</caption>
	</td>
      	<td>
	<img src="images/Femaletshirt1.jpg" alt="tshirt1" style="width:304px;height:228px;"/>
	<caption> Black and white stripped dress - £7.50</caption>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/Femaletshirt3.jpg" alt="tshirt3" style="width:304px;height:228px;"/>
	<caption> Blue tank top - £5.50</caption>
	</td>
      	<td>
	<img src="images/Femaletshirt4.jpg" alt="tshirt4" style="width:304px;height:228px;"/>
	<caption> Pink designed short sleeve t-shirt - £8.00</caption>
	</td>
	</tr>

  </table>





    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
