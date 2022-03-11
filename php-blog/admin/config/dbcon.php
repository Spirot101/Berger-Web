<?php

$host = "localhost";
$username = "erik";
$password = "rootenspirot91b";
$database = "bergerweb";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if (!$con) {
  header("Location: ../errors/dberror.php");
  die();
}

// PDO
// $db_user = "erik";
// $db_pass = "rootenspirot91b";
// $db_name = "bergerweb";

// $db = new PDO('mysql:host=localhost;dbname='. $db_name. ';charset=utf8', $db_user, $db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if (!$db) {
//   header("Location: ../errors/dberror.php");
//   die();
// }

?>