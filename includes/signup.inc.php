<?php
session_start();
//Uses previous database configuration
include '../dbh.php';

//gathers data from html content
$title = $_POST['title'];
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$firstAdd = $_POST['firstAdd'];
$post = $_POST['post'];
$username = $_POST['username'];
$pass = $_POST['pass'];

//prepares SQL query
$sql = "INSERT INTO Customer (Title, FirstName, LastName, EmailAddress, Address, 	Postcode, Username, Password) VALUES ('$title', '$first', '$last', '$email', '$firstAdd', '$post', '$username', '$pass')";
//Stores SQL query result
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
