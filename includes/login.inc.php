<?php
session_start();
//Uses previous database configuration
include '../dbh.php';
//Gathers variables from html document
$username = $_POST['username'];
$pass = $_POST['pass'];
//Prepares SQL query
$sql = "SELECT * FROM Customer WHERE Username='$username' AND Password='$pass'";
//Saves result
$result = mysqli_query($conn, $sql);
//If the username and password combination is not found, echo an error
if(!$row = mysqli_fetch_assoc($result)){
  echo "Username or password is incorrect!";
} else {
  //if the combination is found, setup session variables used later
  $_SESSION['id'] = $row['idCustomer'];
  $_SESSION['username'] = $row['Username'];
  $_SESSION['password'] = $row['Password'];
  $_SESSION['credit'] = $row['AccountCredit'];
}
//redirect the user to the index page
header("Location: ../index.php");
