<?php
session_start();

include '../dbh.php';

$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM Customer WHERE Username='$username' AND Password='$pass'";

$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
  echo "Username or password is incorrect!";
} else {
  $_SESSION['id'] = $row['idCustomer'];
  $_SESSION['username'] = $row['Username'];
  $_SESSION['password'] = $row['Password'];
  $_SESSION['credit'] = $row['AccountCredit'];
}

header("Location: ../signup.php");
