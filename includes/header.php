<?php
// @project Workbook / Princify
// @author Kevin McAleer
// @version 1.0

session_start();
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

                    if (isset($_SESSION['id']))
                    {
                        include_once 'classes/classContact.php';
                        include_once 'classes/classContactView.php';
                        $myContact = new Contact();
                        $myContact->load($_SESSION['id']);
                        //$myContact->show();
                        echo '<a href="account.php">';
                        echo 'Hi, ';
                        echo $myContact->firstname, ' ', $myContact->surname;
                        echo '</a>';
                        echo '<a href="logout.php">Logout</a>';
                        //$myContact->show();
                    }else
                        echo '<a href="login.php">Login</a>';
                    ?>

                </td></tr>
            <tr>
                <td>
