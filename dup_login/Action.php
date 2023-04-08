<?php 
require 'Connect.php';
$user = new Users();

$user->set_loginData($_POST['email'], $_POST['password']);
$email = $user->getEmail();
$password = $user->getPassword();
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$conn = new myConnect();
$connection = $conn->getConnect();
$result = $connection->query($sql);

var_dump($result);



?>