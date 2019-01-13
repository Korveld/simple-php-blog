<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($login) <= 3)
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

$sql = 'SELECT `id` FROM `users` WHERE `login` = :login && `password` = :pass';
$query = $pdo->prepare($sql);
$query->execute(['login' => $login, 'pass' => $pass]);

$user = $query->fetch(PDO::FETCH_OBJ);
if ($user->id == 0) {
  echo 'This login or password is not exists';
} else {
  setcookie('log', $login, time() + 3600 * 24 * 30, '/');
  echo 'Ready';
}