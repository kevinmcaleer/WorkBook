<?php

// Connection.php
// Postgres connections strings
// @author kevinmcaleer

 $host = 'localhost';
 $user = 'postgres';
 $pass = 'postgres';
 $db = 'princify';
 $connection = pg_connect ("host=$host dbname=$db user=$user password=$pass");
?>
