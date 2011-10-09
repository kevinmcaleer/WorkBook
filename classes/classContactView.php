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
    private $myContact;
    public function load($id)
    {
        $myContact = new Contact();
        $myContact->load($id);
        
    }
    public function show() {
        include 'includes/classContact.php';
        $myContact = new Contact();

// TODO need to remove this section as its just for testing
        $myContact->firstname = 'Kevin';
        $myContact->surname = 'McAleer';

        // Display the Contact
        echo '<div class"contact">';
        echo 'myContact->firstname';
        echo 'myContact->surname';
        echo '</div>';
    }

}

?>
