<?php

include 'includes/header.php';

include_once 'classes/classContact.php';
$me = new Contact();
$me->load($_SESSION['id']);
if($me->changepassword)
{
    // the change password flag is set - prompt the user to change their password
    // TODO prompt user to change their password before proceeding.
    echo 'please change your password';
}
?>
<table width="100%" border="0">
    <tr>
        <td width="300">Sidebar</td>
    <td>Dashboard</td>
    </tr>
</table>
<?php

include 'includes/footer.php';
?>