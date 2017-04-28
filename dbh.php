<?php
//Connection information
$conn = mysqli_connect("sql8.freemysqlhosting.net", "sql8157491", "Kb87vhiZrp", "sql8157491");
//Creates a database connection
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
