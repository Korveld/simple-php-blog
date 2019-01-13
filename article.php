<?php
if ($_COOKIE['log'] == '') {
  header('Location: /reg');
  exit();
}
$website_title = 'Add post';
require 'inc/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
        <h4>Add post</h4>
        <form id="postForm" class="mt-4">
          <p>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
          </p>

          <p>
            <label for="intro">Intro</label>
            <textarea name="intro" id="intro" class="form-control"></textarea>
          </p>

          <p>
            <label for="text">Text</label>
            <textarea name="text" id="text" class="form-control"></textarea>
          </p>

          <div class="alert alert-danger" id="errorMsg"></div>

          <button type="submit" id="add_post" name="submit" class="btn btn-success mt-3 w-100">Add</button>
        </form>
        <div id="LoadingImage" class="loading-image" style="display: none;">
          <img src="img/ajax-loader.gif" />
        </div>
      </div>
    </div>
  </div>

<?php require 'inc/footer.php'; ?>