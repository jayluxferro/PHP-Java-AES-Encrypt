<?php
include 'security.php';

$value = "example";
$key = "1234567891234567"; //16 Character Key
echo Security::encrypt($value, $key);
echo "\n";
echo Security::decrypt(Security::encrypt($value, $key), $key);
echo "\n";
?>
