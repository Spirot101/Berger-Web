"use strict";

$(function() {
  $('#register').click(function(e){

    var valid = this.form.checkValidity();

    if (valid) {

      var fullname = $('#fullname').val();
      var email = $('#email').val();
      var password = $('#password').val();

      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'process.php',
        data: {fullname: fullname, email: email, password: password},
        success: function(data) {
          Swal.fire({
            'title': 'Successful!',
            'text': data,
            'icon': 'success'
          })
        },
        error: function(data) {
          Swal.fire({
            'title': 'Error!',
            'text': 'User NOT registered',
            'icon': 'error'
          })
        }
      });
    } else {
      
    }
  });  
});