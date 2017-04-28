<?php
session_start();
//Uses previous database configuration
include '../dbh.php';
//Gets one variable from session variables and takes the other from html content
$id = $_SESSION['id'];
$price = $_POST['price'];


//Prepares SQL query
$sql = "SELECT AccountCredit FROM Customer WHERE idCustomer='$id'";
//Stores results and then specific row data
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
//if the price of a product is more than the account's credit, don't allow purchase
if($price < implode($row)){
  $sql = "UPDATE Customer SET AccountCredit=AccountCredit-'$price' WHERE idCustomer='$id';";
  //User feedback and redirection
  echo 'Purchase Successful!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
} else {
  //User feedback and redirection
  echo 'Not enough balance.';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}

$result = mysqli_query($conn, $sql);
