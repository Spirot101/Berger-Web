<?php 

$page_title = "Gallery";

include('../Templates/header.php'); ?>

  <link rel="stylesheet" type="text/css" href="gallery.css">
  <link rel="stylesheet" type="text/css" href="../assets/style.css">

<div class="container">

  <header>
      
    <div class="main-site">
      <ul>
        <li><a class="main-list" href="../index.php">Home</a></li>
  
        <li><a class="main-list" href="../php-blog/index.php">Blog</a></li>
  
        <li><a class="main-list" href="#">Forum</a></li>
  
        <li><a class="main-list" href="../contact/index.php">Contact</a></li>
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