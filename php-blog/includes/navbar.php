<!-- Ändra logo bild här
<div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
         <img src="assets/images/logo.jpg" height="150" length="50" class="w-100" alt="Funda of Web IT">
      </div>
      <div class="col-md-9">

       </div>
    </div>
  </div>
</div> -->
<!-- ändra navbar färg här -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark shadow sticky-top">
  <div class="container">
    <a class="navbar-brand d-block d-sm-none d-md-none" href="#"></a>
    <!-- ändra toggler färg här -->
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- ändra färg på home här -->
          <a class="nav-link text-white active" aria-current="page" href="index.php">Blog</a>
        </li>
        <?php
          $navbarCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' ";
          $navbarCategory_run = mysqli_query($con, $navbarCategory);

          if (mysqli_num_rows($navbarCategory_run) > 0)
          {
            foreach($navbarCategory_run as $navItems)
            {
              ?>
                <li class="nav-item">
                  <!-- ändra färg på categories här -->
                  <a class="nav-link text-white" href="category.php?title=<?= $navItems['slug']; ?>"><?= $navItems['name']; ?></a>
                </li>
              <?php
            }
          }
        ?>

        <?php if (isset($_SESSION['auth_user'])) : ?>
        <li class="nav-item dropdown">
          <!-- ändra färg på users här -->
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name'];  ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="admin/index.php">My Profile</a>
            </li>
            <li>
              <form action="allcode.php" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
          <?php else : ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="register.php">Register</a>
        </li>
        <?php endif; ?>

      </ul>
      
    </div>
  </div>
</nav>