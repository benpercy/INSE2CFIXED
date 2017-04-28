<?php
  include 'header.php';
 ?>
 <p id="notice">Please enter your details below and click "Register".</p>
 <div style="width: 300px; margin: 0 auto;">
        <article>
          <form action="includes/signup.inc.php" class="registerForm" method="POST">
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
</div>
    <footer>
        <small>&copy; Copyright 2017. Group 2C - Designed & produced by 773455.</small>
    </footer>


    <script src="js/scripts.js"></script>
</body>

</html>
