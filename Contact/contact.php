<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Service</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<script src="https://use.fontawesome.com/26560a88c7.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div class="container">
	
	<header>

	<?php include('../Templates/header.php'); ?>

    <div class="main-site">
      <ul>
        <li><a class="main-list" href="../index.html">Home</a></li>

				<li><a class="main-list" href="../php-blog/index.php">Blog</a></li>
  
        <li><a class="main-list" href="#">Forum</a></li>

				<li><a class="main-list" href="../gallery/gallery.php">Gallery</a></li>
      </ul>
    </div>
  </header>
	
	<main>
		<div class="contact">
				<h1>Contact</h1>
				<p class="info">Feel free to contact us and send in your tips and thoughts on how to continue making this website better for all people across the world.</p>
			
			<form class="form" action="#">
				<div class="label">
					<label>Name*</label> <br>
					<input type="text" name="name" placeholder="Enter Name" autofocus required>
				</div>

				<div class="label">
					<label>Surname*</label>
					<input type="text" name="surname" placeholder="Enter Surname" required>
				</div>

				<div class="label">
					<label>Email*</label> 
					<input type="email" name="email" placeholder="Enter Email" required>
				</div>

				<div class="label">
					<label>Gender</label>
					<select name="gender">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
				</div>
				
				<div class="label">
					<label>Comments</label>
					<textarea class="textarea" name="textarea" placeholder="Enter your comments..." cols="25" rows="2"></textarea>
				</div>
				
				<div class="label">
					<button type="submit" name="submit" value="Submit">Submit</button>

					<button class="clear" type="reset" name="clear" value="clear">Clear</button>
				</div>
			</form>
		</div>
	</main>

<?php include('../Templates/footer.php'); ?>
		
</div>
</body>
</html>