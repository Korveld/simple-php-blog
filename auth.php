<?php
$website_title = 'Authorisation';
require 'inc/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
        <?php if ($_COOKIE['log'] == ''): ?>
          <h4>Authorisation form</h4>
          <form id="authForm" class="mt-4">
            <p>
              <label for="login">Your login</label>
              <input type="text" name="login" id="login" class="form-control">
            </p>
            <p>
              <label for="pass">Your password</label>
              <input type="password" name="pass" id="pass" class="form-control">
            </p>

            <div class="alert alert-danger" id="errorMsg"></div>

            <button type="submit" id="auth_user" name="submit" class="btn btn-success mt-3 w-100">Login</button>
          </form>
          <div id="LoadingImage" class="loading-image" style="display: none;">
            <img src="img/ajax-loader.gif" />
          </div>
        <?php else: ?>
          <h2>Welcome <?=$_COOKIE['log']?></h2>
          <button class="btn btn-danger mt-3" id="exitBtn">Exit</button>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php require 'inc/footer.php'; ?>