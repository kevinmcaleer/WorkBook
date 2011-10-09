<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classContact
 *
 * @author kev
 */
class Contact {

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

    public function load($id) {
        include 'includes/connection.php';
        $query = "SELECT id, firstname, surname FROM contact WHERE id = $this->id";
        pg_query($connection, $query);

        $rows = pg_fetch_array($result);
        $this->id = $id;
        $this->firstname = $rows["firstname"];
        $this->surname = $rows["surname"];
        $this->DOB = $rows["dob"];
        $this->gender = $rows["gender"];
        $this->email = $rows["email"];
        $this->pass = $rows["pass"];
        pg_close($connection);
    }
    public function checkValid($email, $password)
    {
        include 'includes/connection.php';
        $query = "SELECT id, email, pass FROM contact WHERE email=$email AND pass = $password";
        $result = pg_query($connection, $query);
        return $result;
    }
public function checkExists($email)
{
    include 'includes/connection.php';
    $query = "SELECT id, email FROM contact WHERE email=$this->email";
    $result = pg_query($connection, $query);
    $row = pg_fetch_all($result);
    echo $row;
    
    return false; //TODO change this to return true if there are more than 1 rows
}
}

?>

