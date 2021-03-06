<?php

/**
 * Description of classContact
 *
 * @author Kevin McAleer
 * @version 1.0
 * 
 * @package Contact
 */
class Contact {
    
    /**
     * @abstract Contact Class for holding people data
     */

// FIXME something
// TODO something else
//
//   check types against the table schema
    public $id = 0; // the Primary Key
    public $firstname = 'empty';
    public $surname = 'empty';
    public $email = 'user@princify.com';
    public $creationdate = '01/01/2011';
    public $active = false;
    public $registered = false;
    public $gender = 'M';
    public $DOB = '01/01/1980';
    public $pass = 'password';
    public $changepassword = FALSE;

    /**
     *
     * @param type $id The Primary Key
     * @param type $firstname Users First Name
     *  
     */
     
    
    public function load($id) {
        include 'includes/connection.php';
        $this->id = $id;
        $query = "SELECT id, firstname, surname,DOB,email,pass,gender,changepassword FROM contacts WHERE id = $this->id";
        $result = pg_query($connection, $query);

        $rows = pg_fetch_array($result);
        if(pg_num_rows($result)>0)
        {
        $this->id = $id;
        $this->firstname = $rows["firstname"];
        $this->surname = $rows["surname"];
        $this->DOB = $rows["dob"];
        $this->gender = $rows["gender"];
        $this->email = $rows["email"];
        $this->pass = $rows["pass"];
        $this->changepassword = $rows['changepassword'];
        }
        else {
            // No Records Found
            echo 'no records found.';
        }
        pg_close($connection);
    }

    public function checkValid($email, $password) {
        include 'includes/connection.php';
        $query = "SELECT id, email, pass FROM contacts WHERE email='$email' AND pass = '$password'";
        $result = pg_query($connection, $query);
        if(pg_num_rows($result)>0)
        {
            $row = pg_fetch_array($result);
            $this->load($row['id']);
            return TRUE;
        }
       
    
        //$this->id = $row['id'];
      
    }

    public function checkExists($email) {
        include 'includes/connection.php';
        $query = "SELECT contacts.id, contacts.email FROM contacts WHERE email='$this->email'";
        $result = pg_query($connection, $query);
        $row = pg_fetch_all($result);
        if (pg_num_rows($result) > 0) {
            // there is more than one row - email is already registerd
            return true;
        } else {
            // email hasn't been registered yet
            return false;
        }
    }

    public function save() {
        include 'includes/connection.php';
        include 'classes/classPassword.php';

        $newPass = new Password();  // Generate a new password
        $this->pass = $newPass->generatePassword(8);
        $query = "INSERT INTO contacts (firstname, surname, email, pass) VALUES ('$this->firstname', '$this->surname', '$this->email', '$this->pass')";
        //echo $query;
        $result = pg_query($connection, $query);
    }

    public function SendWelcomeEmail() {
        // TODO change the welcome email message to an external file
        $welcomemsg = "Welcome to Princify. Thank you for registering, your temporary password is: $this->pass Please goto beta.princify.com/login.php to login now.";
        $to = $this->email;
        $subject = "Welcome to Princify";
        $headers = "From: Prinify <no-reply@princify.com> ";
        mail($to, $subject, $welcomemsg, $headers);
    }
public function show()
{
    echo 'id ', $this->id;
    echo 'Email: ', $this->email;
    echo 'Password: ', $this->pass;
    echo 'Firstname: ', $this->firstname;
    echo 'Surname: ', $this->surname;
    echo 'changepassword: ', $this->changepassword;
}
}

?>