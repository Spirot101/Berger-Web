<?php
include('../php-blog/includes/config.php');

if (isset($_SESSION['auth']))
{
  $_SESSION['message'] = "You are already logged in";
  header("Location: index.php");
  exit(0);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="../php-blog/assets/css/bootstrap5.min.css">
</head>

<body>
<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">

        <?php include('message.php'); ?>

        <div class="card">
          <div class="card-header">
            <h4>Register</h4>
          </div>
          <div class="card-body">

            <form action="../php-blog/registercode.php" method="POST">

              <div class="form-group mb-3">
                <label>First name</label>
                <input required type="text" name="fname" placeholder="Enter First Name" class="form-control">
              </div>

              <div class="form-group mb-3">
                <label>Last Name</label>
                <input required type="text" name="lname" placeholder="Enter Last Name" class="form-control">
              </div>

              <div class="form-group mb-3">
                <label>Email</label>
                <input required type="email" name="email" placeholder="Enter Email Adress" class="form-control">
              </div>
              
              <div class="form-group mb-3">
                <label>Password</label>
                <input required type="password" name="password" placeholder="Enter Password" class="form-control">
              </div>

              <div class="form-group mb-3">
                <label>Confirm Password</label>
                <input required type="password" name="cpassword" placeholder="Enter confirm Password" class="form-control">
              </div>
              
              <div class="form-group mb-3">
                <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
              </div>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>