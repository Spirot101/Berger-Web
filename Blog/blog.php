<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" type="text/css"  href="blog.css">
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
  
        <li><a class="main-list" href="#">Forum</a></li>

        <li><a class="main-list" href="../gallery/gallery.php">Gallery</a></li>
  
        <li><a class="main-list" href="../contact/contact.php">Contact</a></li>
      </ul>
    </div>
  </header>

  <main>
    <div class="blog">

      <div class="first">
        <p class="blog-header">Erik Berger - 2021-09-29</p>
        <img class="pic" src="https://picsum.photos/id/367/500/300" alt="image">
        <a href="#"><h3>Suffer the pain of discipline, or suffer the pain of regret</h3><p class="blog-p">Your “small self” is a combination of habits, behaviors, and beliefs you adopted from those around you. You interpreted their needs and...</p></a>
        
      </div>

      <div class="second">
        <p class="blog-header">Erik Berger - 2021-09-30</p>
        <img class="pic" src="https://picsum.photos/id/366/500/300" alt="image">
        <a href="post/second.php"><h3>Aim to do something everyday that pushes you forward</h3><p class="blog-p">Rather than focusing on fleeting pleasure, find what leads to satisfaction: a purpose in life. Long lasting achievement, accomplishment, and meaning that will propel you forward in life to thrive...</p></a>
      </div>

      <div class="third">
        <p class="blog-header">Erik Berger - 2021-09-29</p>
        <img class="pic" src="https://picsum.photos/id/365/500/300" alt="image">
        <a href="#"><h3>It is not simply a matter of determination, but more of trust and faith</h3><p class="blog-p">The only real impediment to sucess is yourself and your emotions, boredom, panic, frustration, insecurity. Have faith in the process...</p></a>
      </div>
      
    </div>
  </main>
    
<?php include('../Templates/footer.php'); ?>

</div>
</body>
</html>