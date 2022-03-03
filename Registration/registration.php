<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<!-- <style>
<?php // include ('style.css'); ?>
</style> -->

<body>

<div>
  <form action="registration.php" method="POST">
    <div class="container">

      <div class="row">
        <div class="col-sm-3">
          <h1>Registration</h1>
          <p>Please fill up the form to register.</p>
          <hr class="mb-3">
          <label for="fullname"><b>Full Name *</b></label>
          <input class="form-control" id="fullname" type="text" name="fullname" required>
            
          <label for="email"><b>Email *</b></label>
          <input class="form-control" id="email" type="email" name="email" required>

           <label for="password"><b>Password *</b></label>
           <input class="form-control" id="password" type="password" name="password" required>
           <hr class="mb-3">
           <input class="btn btn-primary" type="submit" id="register" name="create" value="Register">
        </div>
      </div>
    </div>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="registration.js"></script>

</body>
</html>