<?php

include 'classes/classPassword.php';
$myPass = new Password();
$test = $myPass->generatePassword(8);
echo $test;
?>
