<?php
session_start();

include 'dbh.php';

$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM customer WHERE Username='$username' AND Password='$pass'";

$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
  echo "Username or password is incorrect!";
} else {
  $_SESSION['id'] = $row['idCustomer'];
}

header("Location: index.html");
