<?php
$password = 'riyan123';
$salt = 'colabsproject';

$hashedPassword = password_hash($password . $salt, PASSWORD_DEFAULT);
echo $hashedPassword;
?>
