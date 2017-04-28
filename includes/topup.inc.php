<?php
session_start();
//Uses previous database configuration
include '../dbh.php';

//Gathers variables from both HTML input data and session information
$id = $_SESSION['id'];
$username = $_POST['username'];
$pass = $_SESSION['password'];
$confPass = $_POST['pass'];
$cardNo = $_POST['cardNo'];
$cardSec = $_POST['cardSecurity'];
$topUp = $_POST['topUp'];

//Validation is carried out on the form to ensure that the user has input acceptable data.
if($topUp < 0 || $topUp > 1000){
  //User feedback and redirection
  echo 'Top Up unsuccessful! Amount entered is too great or too small.';
  echo "<script>setTimeout(\"location.href = '../index.php';\",4000);</script>";
}else if ($pass != $confPass){
  //User feedback and redirection
  echo 'Incorrect password entered!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}else if (strlen($cardNo) != 16){
  //User feedback and redirection
  echo 'Incorrect card number entered!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}else if (strlen($cardSec) != 3){
  //User feedback and redirection
  echo 'Incorrect card security number entered!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}else if (!isset($_POST['check'])){
  //User feedback and redirection
  echo 'Terms and conditions not accepted! Top up unsuccessful!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",3000);</script>";
}else{
  //Prepares SQL query
  $sql = "UPDATE Customer SET AccountCredit=AccountCredit+'$topUp' WHERE idCustomer='$id';";
  //Stores SQL query result
  $result = mysqli_query($conn, $sql);
  //User feedback and redirection
  echo 'Top Up Successful!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}
