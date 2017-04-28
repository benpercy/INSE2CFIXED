<?php
session_start();

include '../dbh.php';

$id = $_SESSION['id'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$cardNo = $_POST['cardNo'];
$cardSec = $_POST['cardSecurity'];
$topUp = $_POST['topUp'];

$sql = "UPDATE Customer SET AccountCredit=AccountCredit+'$topUp' WHERE idCustomer='$id';";

$result = mysqli_query($conn, $sql);

header("Location: ../topup.php");
