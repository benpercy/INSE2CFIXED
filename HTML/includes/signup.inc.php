<?php
session_start();

include '../dbh.php';

$title = $_POST['title'];
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$firstAdd = $_POST['firstAdd'];
$post = $_POST['post'];
$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "INSERT INTO customer (Title, FirstName, LastName, EmailAddress, Address, 	Postcode, Username, Password) VALUES ('$title', '$first', '$last', '$email', '$firstAdd', '$post', '$username', '$pass')";

$result = mysqli_query($conn, $sql);

header("Location: ../signup.php");
