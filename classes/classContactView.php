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
    function classContactView()
    {
        include_once 'classes/classContact.php';
        $this->myContact = new Contact();
       
    }
    
    public function load($id)
    {
        //$myContact = new Contact();
        $this->myContact->load($id);
        
    }
    public function show() {
        include_once 'classes/classContact.php';
       // $myContact = new Contact();

// TODO need to remove this section as its just for testing
        $this->myContact->firstname = 'Kevin';
        $this->myContact->surname = 'McAleer';

        // Display the Contact
        echo '<div class"contact">';
        echo 'Firstname: ', $this->myContact->firstname, '<br />';
        echo 'Surname: ', $this->myContact->surname, '<br />';
        echo 'Email: ', $this->myContact->email, '<br />';
        echo 'Pass: ', $this->myContact->pass, '<br />';
        echo '</div>';
    }

}

?>
