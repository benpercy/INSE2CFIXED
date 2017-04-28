<?php
session_start();

include '../dbh.php';

$username = $_POST['username'];
$pass = $_POST['pass'];
$cardNo = $_POST['cardNo'];
$cardSec = $_POST['cardSecurity'];
$topUp = $_POST['topUp'];

$sql = "UPDATE Customer SET AccountCredit=AccountCredit+'$topUp' WHERE idCustomer=1;";

$result = mysqli_query($conn, $sql);

header("Location: ../topup.php");
