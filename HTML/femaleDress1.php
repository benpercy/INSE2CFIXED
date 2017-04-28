<?php
  include 'header.php';
 ?>

<table class="images">
      <tr>
	<td>
	<img src="images/Female dress 1.jpg" alt="Cardigan1" style="width:304px;height:228px;"/><br>
  White and brown patterned midi length dress
	</td>
	</tr>
</table>


<div style="width: 300px; margin: 0 auto;">
<article>
  <form action="includes/purchase.inc.php" method="POST">
    <input type="text" name="price" value="18.99" readonly><br>
    <button type ="submit">Purchase</button>
  </form>
</article>
</div>
  <p id="notice">Note: You will be redirected to the index page and will have to logout and back in for the new credit value to show.</p>

  <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>

</body>

</html>
