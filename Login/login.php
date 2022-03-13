<?php
include('../php-blog/includes/config.php');

if (isset($_SESSION['auth']))
{
  if (!$_SESSION['message']) {
    $_SESSION['message'] = "You are already logged in";
  }
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
  <title>Login</title>
  <link rel="stylesheet" href="login.css" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body background="https://picsum.photos/id/1042/2000/1000">
  
  <div class="login-site">
		<ul>

      <li><a href="../index.html">Home</a></li>

      <li><a href="../php-blog/index.php">Blog</a></li>

			<li><a href="#">Forum</a></li>

      <li><a href="../gallery/gallery.php">Gallery</a></li>

			<li><a href="../contact/contact.php">Contact</a></li>
		</ul>
	</div>

  <div class="login-box">

  <?php include('message.php'); ?>
  
    <h1>Login</h1>

    <form action="../php-blog/logincode.php" method="POST">

    <div class="textbox">
      <i class="material-icons">
        person</i>
      <input type="email" name="email" placeholder="Email" required>
    </div>

    <div class="textbox">
      <i class="material-icons">
        lock</i>
      <input type="password" name="password" placeholder="Password" required>
    </div>

    <button class="btn" type="submit" name="login_btn">Login Now</button>

  </form>
  <a class="create link" href="../Registration/registration.php">Create account</a>
  <a class="link" href="#">Forgot password?</a>
  <a class="link" href="#">Forgot email?</a>
  </div>
    
  
  

</body>
</html>