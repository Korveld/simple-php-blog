<!doctype html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $website_title ?></title>
  <link rel="icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="d-flex flex-column h-100">

<div class="flex-shrink-0">

  <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">PHP Blog</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="/">Home</a>
      <a class="p-2 text-dark" href="/contacts">Contacts</a>
      <?php if ($_COOKIE['log'] != ''): ?>
        <a class="p-2 text-dark" href="/article">Add post</a>
      <?php endif; ?>
    </nav>
    <?php if ($_COOKIE['log'] == ''): ?>
      <a class="btn btn-outline-primary mr-2 mb-xs-2" href="/auth">Login</a>
      <a class="btn btn-outline-primary" href="/reg">Registration</a>
    <?php else: ?>
      <a class="btn btn-outline-primary mb-xs-2" href="/auth">User account</a>
    <?php endif; ?>
  </header>

  <main role="main" class="mt-5">