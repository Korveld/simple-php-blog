<?php
$website_title = 'Registration';
require 'inc/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
        <h4>Registration form</h4>
        <form id="regForm" class="mt-4">
          <p>
            <label for="name">Your name</label>
            <input type="text" name="name" id="name" class="form-control">
          </p>
          <p>
            <label for="email">Your email</label>
            <input type="email" name="email" id="email" class="form-control">
          </p>
          <p>
            <label for="login">Your login</label>
            <input type="text" name="login" id="login" class="form-control">
          </p>
          <p>
            <label for="pass">Your password</label>
            <input type="password" name="pass" id="pass" class="form-control">
          </p>

          <div class="alert alert-danger" id="errorMsg">
            You have successfully registered. Now you can login from <a href="/auth">this page</a>.
          </div>

          <button type="submit" id="reg_user" name="submit" class="btn btn-success mt-3 w-100">Submit</button>
        </form>
        <div id="LoadingImage" class="loading-image" style="display: none;">
          <img src="img/ajax-loader.gif" />
        </div>
      </div>
    </div>
  </div>

<?php require 'inc/footer.php'; ?>