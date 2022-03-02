<?php
require_once('config.php');
?>

<?php

if(isset($_POST)) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = sha1($_POST['password']);
  
  $sql = "INSERT INTO users (fullname, email, password) VALUES (?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$fullname, $email, $password]);
  if ($result) {
    echo 'Great success!';
  } else {
    echo 'Warning warning! intruders alert, intruders alert';
  }

} else {
	echo 'No data';
}