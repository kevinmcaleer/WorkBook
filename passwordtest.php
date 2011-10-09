<?php

include 'classes/classPassword.php';
$myPass = new Password();
$myPass->symbol_include = FALSE;
$myPass->number_include = TRUE;
$myPass->alpha_upper_include = TRUE;
$test = $myPass->generatePassword(8);
echo $test;
?>
