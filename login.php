<?php

// @file Login.php
// @project Princify
// @author Kevin McAleer
// @version 1.0

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

        $_SESSION['id'] = $data['id'];
        $_SESSION['firstname'] = $data['firstname'];

        // Redirect:

        $url = absolute_url('index.php');
        header("location: $url");

        exit(); // Quit the script
    } else { // Unsuccessful
        $error = true;
    }
} // end of the main submit conditional

session_start();

include 'includes/header.php';
//include 'includes/login_page.inc.php';
// include 'includes/footer.inc.php';

if ($error) {
    echo '<div class="box">';
    echo 'Sorry there was a problem with your username and password';
    echo '</div>';
} else {
    include 'includes/login_page.php';
}


include 'includes/footer.php';
?>
