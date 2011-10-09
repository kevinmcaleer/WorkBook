<?php
// This is the contacts page
// @author Kevin McAleer
// @version 1.0
?>
<div class="contacts list">
    <h1> contacts list</h1>

    <?php
    include_once 'classes/classContactClass.php';
    $myContactsList = new classContactsView;
    $myContactsList->show(1); // TODO change this to be the currently logged in user
    ?>

</div>