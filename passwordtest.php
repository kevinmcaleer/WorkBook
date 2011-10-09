<?php

include 'classes/classPassword.php';
$myPass = new Password();
$myPass->symbol_include = FALSE;
$test = $myPass->generatePassword(8);
echo $test;
?>
