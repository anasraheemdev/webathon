<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$connection = mysqli_connect("localhost", "root", "", "webathon") or die();

$insert = "INSERT INTO users (name,	email,password) values ('{$name}','{$email}','{$password}')";
mysqli_query($connection, $insert);

echo "<h1>$name</h1>";
echo "<h1>$email</h1>";
echo "<h1>$password</h1>";


?>