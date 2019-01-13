jQuery(document).ready(function ($) {
  var regForm = $('#regForm');
  var authForm = $('#authForm');
  var postForm = $('#postForm');
  var contactForm = $('#contactForm');
  var errorMsg = $('#errorMsg');

  regForm.on('submit', function (e) {
    e.preventDefault();
    $('#LoadingImage').show();
    $.ajax({
      url: '../ajax/reg-form.php',
      type: 'POST',
      cache: false,
      data: regForm.serialize(),
      dataType: 'html'
    }).done(function (data) {
      $('#LoadingImage').hide();
      if (data == 'Ready') {
        regForm.find('input').val('');
        regForm.trigger('reset');
        errorMsg.hide()
                .show()
                .removeClass('alert-danger')
                .addClass('alert-primary');
      } else {
        errorMsg.show()
                .text(data);
      }
    });
  });

  authForm.on('submit', function (e) {
    e.preventDefault();
    $('#LoadingImage').show();
    $.ajax({
      url: '../ajax/auth-form.php',
      type: 'POST',
      cache: false,
      data: authForm.serialize(),
      dataType: 'html'
    }).done(function (data) {
      $('#LoadingImage').hide();
      if (data == 'Ready') {
        authForm.find('input').val('');
        authForm.trigger('reset');
        errorMsg.hide()
                .text(data)
                .show()
                .removeClass('alert-danger')
                .addClass('alert-primary');
        document.location.reload(true);
      } else {
        errorMsg.show()
                .text(data);
      }
    });
  });

  postForm.on('submit', function (e) {
    e.preventDefault();
    $('#LoadingImage').show();
    $.ajax({
      url: '../ajax/add-post.php',
      type: 'POST',
      cache: false,
      data: postForm.serialize(),
      dataType: 'html'
    }).done(function (data) {
      $('#LoadingImage').hide();
      if (data == 'Ready') {
        postForm.find('input').val('');
        postForm.trigger('reset');
        errorMsg.hide()
          .text(data)
          .show()
          .removeClass('alert-danger')
          .addClass('alert-primary');
      } else {
        errorMsg.show()
                .text(data);
      }
    });
  });

  contactForm.on('submit', function (e) {
    e.preventDefault();
    $('#LoadingImage').show();
    $.ajax({
      url: '../ajax/contact-form.php',
      type: 'POST',
      cache: false,
      data: contactForm.serialize(),
      dataType: 'html'
    }).done(function (data) {
      $('#LoadingImage').hide();
      if (data == 'Ready') {
        contactForm.find('input').val('');
        contactForm.trigger('reset');
        errorMsg.hide()
          .text(data)
          .show()
          .removeClass('alert-danger')
          .addClass('alert-primary');
      } else {
        errorMsg.show()
          .text(data);
      }
    });
  });

  $('#exitBtn').on('click', function () {
    $.ajax({
      url: '../ajax/exit.php',
      type: 'POST',
      cache: false,
      data: {},
      dataType: 'html'
    }).done(function (data) {
        document.location.reload(true);
    });
  });
});