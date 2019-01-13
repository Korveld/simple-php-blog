<?php
$username = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($username) <= 3)
  $error = 'Please enter name';
elseif (strlen($email) <= 3)
  $error = 'Please enter email';
elseif (strlen($login) <= 3)
  $error = 'Please enter login';
elseif (strlen($pass) <= 3)
  $error = 'Please enter password';

if ($error != '') {
  echo $error;
  exit();
}

$hash = "asfg544dgsGfas412hjdSDr";
$pass = md5($pass . $hash);

require_once ('mysql_connect.php');

$sql = 'INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $login, $pass]);

echo 'Ready';