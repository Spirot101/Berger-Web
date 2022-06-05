<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Berger's Web Blog</title> -->

  <title><?php if(isset($page_title)) { echo"$page_title"; } else { echo "Berger's Web Blog"; } ?></title>

  <meta name="description" content="<?php if(isset($meta_description)) { echo"$meta_description"; } ?>"> 
  <meta name="keywords" content="<?php if(isset($meta_keywords)) { echo"$meta_keywords"; } ?>"> 
  <meta name="author" content="Berger's Web"> 

  <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="../assets/style.css">
  <script src="https://use.fontawesome.com/26560a88c7.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<header>
    <div class="main-site">
      <ul>
        <h1 class="berger">Berger-Web</h1>
        <li><a class="main-list" href="../index.php">Home</a></li>
  
        <li><a class="main-list" href="#">Forum</a></li>

				<li><a class="main-list" href="../gallery/index.php">Gallery</a></li>

        <li><a class="main-list" href="../contact/index.php">Contact</a></li>
      </ul>
    </div>
  </header>
<body>