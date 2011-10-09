<?php

// @file Login.php
// @project Princify
// @author Kevin McAleer
// @version 1.0

function absolute_url($page = 'index.php') {

// Start defining the URL...
// URL is http:// plus the host name plus the current directory:
$url = 'http://'. $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']);

// Remove any trailing slashes:

$url = rtrim($url,'/\\');

// Add the page:

$url .= '/'. $page;

// Return the URL:

return $url;
} // ebd if absolute_URL() function

if (isset($_POST['submitted'])) {

    include 'classes/classContact.php';
    $myAccount = new Contact();

    // checking that the user is valid
    $e = $_POST['email'];
    $p = $_POST['pass'];
    $check = $myAccount->checkValid($e, $p);
    //echo $check;

    if ($check) { // OK!
        // Set the session data:
        session_start();
        
        $_SESSION['id'] = $myAccount->id;
        $_SESSION['firstname'] = $myAccount->firstname;

        // Redirect:

        $url = absolute_url('index.php');
        header("location: $url");

        exit(); // Quit the script
    } 
} // end of the main submit conditional



include 'includes/header.php';
//include 'includes/login_page.inc.php';
// include 'includes/footer.inc.php';

if (!$check) {
    echo '<div class="box">';
    echo 'Sorry there was a problem with your username and password';
    echo '</div>';
} else {
    include 'includes/login_page.php';
}


include 'includes/footer.php';
?>
