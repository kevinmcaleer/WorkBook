<?php
// Register Page

include 'includes/header_nologin.php';
?>
<?php
if (isset($_POST['submitted'])) {

// check if the email address is already used

    include 'classes/classContact.php';     // include the contact class
    $newUser = new Contact();               // create a new contact
    $newUser->email = $_POST['email'];
    $newUser->firstname = $_POST['firstname'];
    $newUser->surname = $_POST['surname'];
    
    if ($newUser->checkExists($_POST['email'])) {
        // if TRUE the user must already have registered this email address
        echo 'Sorry that email address is already registered.';
    } else {
        // if FALSE then the user has not registered this email address
        
        $newUser->save();
        $newUser->SendWelcomeEmail();
        echo '<div class="tb">Submitted!</div>';
        echo 'We have sent a Welcome email to the email address: ', $newUser->email,' this includes your temporary password'; 
    }    
    
} else {
    ?>

    <h1>Register</h1>
    <form action="register.php" method="post">
        <table>
            <tr><td>Firstname: <input type="text" name="firstname">Firstname</input> </td></tr>
            <tr><td>Surname: <input type="text" name="surname">Surname</input></td></tr>
            <tr><td>Email Address: <input type="text" name="email">Email</input></td></tr>
            <tr><td><input type="hidden" name="submitted" value="login"></input>
            <tr><td>Submit<input type="submit" value="true"></td></tr>
        </table>


    </form>

    <?php
}
include 'includes/footer.php';
?>
