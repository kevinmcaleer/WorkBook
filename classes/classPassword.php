<?php

// Password Generator

class Password {

    public $password = "password";
    public $length = 8;
    public $alpha_upper_include = TRUE;
    public $alpha_lower_include = TRUE;
    public $number_include = TRUE;
    public $symbol_include = TRUE;

    public function generatePassword() {

// for the length of the password string, choose  one of the 4 types available (if true) and then
// initiate variables

        $this->password = "";
        $n = 0;
        while ($n <= $this->length) {
            $n++;


// choose a character type
            $dice = rand(0,3); // roll the dice
            switch ($dice) {
                case 0: // alpha_upper
                    if ($this->alpha_upper_include == TRUE) {
                        $password[$n] = strtoupper(chr(rand(1, 26)));
                    }
                    break;
                case 1:// alpha_lower
                    if ($this->alpha_lower_include == TRUE) {
                        $password[$n] = strtolower(chr(rand(1, 26)));
                    }
                    break;
                case 2:// number
                    if ($this->number_include == TRUE){
                        $password[$n] = rand(0,9);
                    }
                    break;
                case 3:// symbol
                    if ($this->symbol_include == TRUE) {
                        // TODO include more symbols to chose from!
                        $password[$n] = '!';
                    }
                        
                    break;
            } // end switch
        } // end while
    return $this->password;
        
    }

// end function GeneratePassword
}

// end Class Pasword
?>
