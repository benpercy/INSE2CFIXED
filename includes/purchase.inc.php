<?php
session_start();

include '../dbh.php';

$id = $_SESSION['id'];
$price = $_POST['price'];



$sql = "SELECT AccountCredit FROM Customer WHERE idCustomer='$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($price < implode($row)){
  $sql = "UPDATE Customer SET AccountCredit=AccountCredit-'$price' WHERE idCustomer='$id';";
  echo 'Purchase Successful!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
} else {
  echo 'Not enough balance.';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}

$result = mysqli_query($conn, $sql);
