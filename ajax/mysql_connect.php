<?php
$DBUser = 'admin';
$DBPassword = 'admin';
$DBName = 'itproger_php_blog';
$DBHost = 'localhost';

$dsn = 'mysql:host=' . $DBHost . ';dbname=' . $DBName;
$pdo = new PDO($dsn, $DBUser, $DBPassword);