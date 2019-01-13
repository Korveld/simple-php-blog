<?php
$username = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$mess = trim($_POST['mess']);

$error = '';
if (strlen($username) <= 3)
  $error = 'Please enter name';
elseif (strlen($email) <= 3)
  $error = 'Please enter email';
elseif (strlen($mess) <= 5)
  $error = 'Please enter message';

if ($error != '') {
  echo $error;
  exit();
}

$my_email = 'volos88@gmail.com';
$subject = '=?utf-8?B?' . base64_encode('New message from php blog').'?=';
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$message = "Name: $username \nEmail: $email \nMessage: $mess";

mail($my_email, $subject, $message, $headers);

echo 'Ready';