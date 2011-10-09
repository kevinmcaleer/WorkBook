<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classContactView
 *
 * @author kev
 */

class classContactView {
    public $myContact;
    public function load($id)
    {
        $myContact = new Contact();
        $myContact->load($id);
        
    }
    public function show() {
        include_once 'classes/classContact.php';
        $myContact = new Contact();

// TODO need to remove this section as its just for testing
        $myContact->firstname = 'Kevin';
        $myContact->surname = 'McAleer';

        // Display the Contact
        echo '<div class"contact">';
        echo 'Firstname: ', $myContact->firstname, '<br />';
        echo 'Surname: ', $myContact->surname, '<br />';
        echo 'Email: ', $myContact->email, '<br />';
        echo 'Pass: ', $myContact->pass, '<br />';
        echo '</div>';
    }

}

?>
