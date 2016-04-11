<?php
// set the expiration date to one hour ago
setcookie("login", "", time() - 3600);
header('Location: http://localhost/login.php');
exit();
?>