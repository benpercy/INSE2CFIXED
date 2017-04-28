<?php
session_start();

include '../dbh.php';

$id = $_SESSION['id'];
$username = $_POST['username'];
$pass = $_SESSION['password'];
$confPass = $_POST['pass'];
$cardNo = $_POST['cardNo'];
$cardSec = $_POST['cardSecurity'];
$topUp = $_POST['topUp'];


if($topUp < 0 || $topUp > 1000){
  echo 'Top Up unsuccessful! Amount entered is too great or too small.';
  echo "<script>setTimeout(\"location.href = '../index.php';\",4000);</script>";
}else if ($pass != $confPass){
  echo 'Incorrect password entered!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}else if (strlen($cardNo) != 16){
  echo 'Incorrect card number entered!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}else if (strlen($cardSec) != 3){
  echo 'Incorrect card security number entered!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}else if (!isset($_POST['check'])){
  echo 'Terms and conditions not accepted! Top up unsuccessful!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",3000);</script>";
}else{
  $sql = "UPDATE Customer SET AccountCredit=AccountCredit+'$topUp' WHERE idCustomer='$id';";
  $result = mysqli_query($conn, $sql);
  echo 'Top Up Successful!';
  echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
}
