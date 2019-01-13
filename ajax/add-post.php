<?php
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
$text = trim($_POST['text']);

$error = '';
if (strlen($title) <= 3)
  $error = 'Please enter post title';
elseif (strlen($intro) <= 15)
  $error = 'Please enter post intro';
elseif (strlen($text) <= 20)
  $error = 'Please enter post text';

if ($error != '') {
  echo $error;
  exit();
}

require_once ('mysql_connect.php');

$sql = 'INSERT INTO articles(title, intro, text, date, author) VALUES(?, ?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$title, $intro, $text, time(), $_COOKIE['log']]);

echo 'Ready';