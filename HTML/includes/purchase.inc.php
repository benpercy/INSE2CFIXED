<?php
session_start();

include '../dbh.php';

$id = $_SESSION['id'];
$price = $_POST['price'];

$sql = "UPDATE Customer SET AccountCredit=AccountCredit-'$price' WHERE idCustomer='$id';";

$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
