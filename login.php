<?php
// @file Login.php
// @project Princify
// @author Kevin McAleer
// @version 1.0

if (isset($_POST['submitted'])) {

    // TODO create a userlogin class / user contact
    // TODO pass it the email and password details
    // TODO see if user is valid 
    // Need the database connection:

    include 'classes/classContact.php';
    $myAccount = new Contact();

    // checking that the user is valid
    $e = $_POST['email'];
    $p = $_POST['pass'];
    $check = $myAccount->checkValid($e, $p);
    echo $check;

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
        // Assign $data to $errors for error reporting
        // in the login_page.inc.php file
        $errors = $data;
    
    }

    //pg_close($connection); // close he db connection
} // end of the main submit conditional
//

session_start();

include 'includes/header.php';
//include 'includes/login_page.inc.php';
// include 'includes/footer.inc.php';
?>
<h1>Login page</h1>
<div class="box">
    <form action="login.php" method="post">
        <table>
            <tr>
                <td><input type="text" name="email">Email</input></td>
                <td><input type="text" name="pass">Password</input></td>
                
            </tr>
        </table>    
        <input type="hidden" value="submit"></input>
    </form>        
    
</div>

<a href="register.php">Click here to Register</a>
<?php
include 'includes/footer.php';
?>
