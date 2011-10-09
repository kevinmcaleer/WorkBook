<?php
// Register Page

include 'includes/header.php';
?>
<?php
if (isset($_POST['submitted'])) {

// check if the email address is already used

    include 'classes/classContact.php';     // include the contact class
    $newUser = new Contact();               // create a new contact
    if ($newUser->checkExists($_POST['email'])) {
        echo 'Sorry that email address is already registered.';
    } else {
        // if not then add user
        
    }
    ?>



    Submitted!

    <?php
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
