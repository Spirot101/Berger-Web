<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" type="text/css" href="gallery.css">
	<script src="https://use.fontawesome.com/26560a88c7.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div class="container">

    <header>
      <div class="header">
        <ul>			
          <li><a class="head-list" href="../login/login.html"><i class="material-icons">login</i> Login</a></li>
      
          <li><a class="head-list" href="../Registration/registration.php"><i class="material-icons">account_circle</i> Create Account</a></li>			
        </ul>
      </div>
  
      <div class="main-site">
        <ul>
          <li><a class="main-list" href="../index.html">Home</a></li>
    
          <li><a class="main-list" href="../blog/blog.php">Blog</a></li>
    
          <li><a class="main-list" href="#">Forum</a></li>
    
          <li><a class="main-list" href="../contact/contact.php">Contact</a></li>
        </ul>
      </div>
    </header>

    <main>
      <div class="gallery">
        
        <!-- Bild exemplar för html -->
        <!-- <div class="column">
          <a target="_blank" href="https://picsum.photos/id/375/1500/900">
            <img src="https://picsum.photos/id/375/600/800" alt="harmony">
          </a>
          <div class="desc"><b>Harmony</b> - <em>Wellington Sanipe</em></div>
        </div> --> 

      </div>
    </main>

<?php include('../Templates/footer.php'); ?>

</div>

  <script src="images.json"></script>
  <script src="gallery.js"></script>
</body>
</html>