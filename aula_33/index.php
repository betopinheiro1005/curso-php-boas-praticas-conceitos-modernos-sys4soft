<?php

$pass1 = "123456";
$enc1 = md5($pass1);

echo "<p>$pass1</p><p>$enc1</p>";

echo "<p>==========================================================</p>";

$pass2 = "abcdef";
$enc2 = md5($pass2);

echo "<p>$pass2</p><p>$enc2</p>";

echo "<p>==========================================================</p>";

$pass3 = "abcdef";
$enc3 = password_hash($pass3, PASSWORD_DEFAULT);

echo "<p>$pass3</p><p>$enc3</p>";

echo "<p>==========================================================</p>";

$pass4 = "abcdef";
$enc4 = password_hash($pass4, PASSWORD_BCRYPT);

echo "<p>$pass4</p><p>$enc4</p>";

echo "<p>==========================================================</p>";

?>