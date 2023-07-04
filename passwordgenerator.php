<?php
$password = 'riyan123';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedPassword;
?>
