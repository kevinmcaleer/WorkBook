<?php
// @project Workbook / Princify
// @author Kevin McAleer
// @version 1.0

session_start();
if (!isset($_SESSION['id'])) {
    include 'includes/login_page.php';
    exit;
}
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
//include 'includes/nav.php';
?>
                </td>
                <td>

                </td></tr>
            <tr>
                <td>
