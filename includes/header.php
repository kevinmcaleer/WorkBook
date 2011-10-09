<?php
// @project Workbook / Princify
// @author Kevin McAleer
// @version 1.0
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table><tr><td>        
                    <?php
                    include 'includes/nav.php';
                    ?>
                </td>
                <td>
                    <?php
                    // TODO if logged in the show acount, otherwise show the login link
                    echo '<a href="login.php">Login</a>';
                    ?>

                </td></tr>
           <tr>
            <td>
