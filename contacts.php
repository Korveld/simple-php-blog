<?php
$website_title = 'Contacts';
require 'inc/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
        <h4>Contact form</h4>
        <form id="contactForm" class="mt-4">
          <p>
            <label for="name">Your name</label>
            <input type="text" name="name" id="name" class="form-control">
          </p>
          <p>
            <label for="email">Your email</label>
            <input type="email" name="email" id="email" class="form-control">
          </p>
          <p>
            <label for="mess">Your message</label>
            <textarea name="mess" id="mess" class="form-control"></textarea>
          </p>

          <div class="alert alert-danger" id="errorMsg">
            Your message have successfully sent. We will contact you soon.
          </div>

          <button type="submit" name="submit" class="btn btn-success mt-3 w-100">Send</button>
        </form>
        <div id="LoadingImage" class="loading-image" style="display: none;">
          <img src="img/ajax-loader.gif" />
        </div>
      </div>
    </div>
  </div>

<?php require 'inc/footer.php'; ?>