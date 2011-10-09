<?php
// Register Page

include 'includes/header.php';
?>
<?php
if (isset($_POST['submitted']))
{    
?>
Submitted!

<?php
}
else {
    

?>

<h1>Register</h1>
<form action="register.php" method="post">
    <table>
        <tr><td>Firstname: <input type="textbox" name="firstname">Firstname</input> </td></tr>
        <tr><td>Surname: <input type="textbox" name="surname">Surname</input></td></tr>
        <tr><td>Submit:<button type="submit">Submit</button></td></tr>
    </table>


</form>

<?php
}
include 'includes/footer.php';
?>
