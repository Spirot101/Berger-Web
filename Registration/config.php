<?php

$db_user = "erik";
$db_pass = "rootenspirot91b";
$db_name = "bergerweb";

$db = new PDO('mysql:host=localhost;dbname='. $db_name. ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);