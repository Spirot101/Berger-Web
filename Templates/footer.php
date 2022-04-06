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

<footer>
    <div class="main-footer">
      <div class="left box">
        <h2>About us</h2>
        <div class="content">
          <p class="footer-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas cupiditate iusto, voluptate laborum at, necessitatibus totam soluta culpa mollitia a dolores quisquam dignissimos rerum. Aliquam impedit nam natus distinctio nihil.</p>
          <div class="social">
              
            <a class="icon" href="#"><span class="fa fa-facebook"></span></a>	
              
            <a class="icon" href="#"><span class="fa fa-twitter"></span></a>
  
            <a class="icon" href="#"><span class="fa fa-instagram"></span></a>
              
            <a class="icon" href="#"><span class="fa fa-youtube"></span></a>
          </div>
        </div>
      </div>
  
      <div class="center box">
        <h2>Contact</h2>
        <div class="content">
  
          <div class="place">
            <i class="material-icons">place</i>
            <span class="footer-text">Street Name Number, World</span>
          </div>
  
          <div class="phone">
             <i class="material-icons">call</i>						
            <span class="footer-text">+99-658321</span>
          </div>
  
          <div class="email">
            <i class="material-icons">email</i>
            <span class="footer-text">Name.abc@example.com</span>
          </div>
        </div>
      </div>
  
      <div class="right box">
      <?php include('message.php'); ?>
        <h2><i class="material-icons">account_circle</i> Login to your account</h2>
        <div class="content">
          <form action="../php-blog/logincode.php" method="POST">

            <div class="email">						
               <div class="text"><i class="material-icons">person</i> Email *</div>
               <input type="email" name="email" required>
            </div>

            <div class="msg">
              <div class="text"><i class="material-icons">
                  lock</i> Password *</div>
               <input type="password" name="password" required>
             </div>
                        
            <div class="btn">
              <button class="login" type="submit" name="login_btn">Login</button>
            </div>						
          </form>
        </div>
      </div>
  
      <div class="copyright">
         <p class="copy">Copyright©</p>
      </div>
  
    </div>	
  </footer>

  </body>
</html>