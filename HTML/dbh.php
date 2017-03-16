<?php

$conn = mysqli_connect("localhost", "root", "", "sql8157491");

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
