<?php

// Password Generator

class Password {

    public $password = "password";
    public $length = 8;
    public $alpha_upper_include = TRUE;
    public $alpha_lower_include = TRUE;
    public $number_include = TRUE;
    public $symbol_include = TRUE;
    const alpha_upper_include = 0;
    const alpha_lower_include = 1;
    const number = 2;
    const symbol = 3;
    

    public function generatePassword($p_len) {

// for the length of the password string, choose  one of the 4 types available (if true) and then
// initiate variables
        echo 'password is: ', $this->password, '<br />';
        echo 'Lenth is: ', $this->length, '<br />';
        echo 'Alpha_upper_include is: ', $this->alpha_upper_include, '<br />';
        echo 'Alpha_lower_include is:', $this->alpha_lower_include, '<br />';
        echo 'Number_include is: ', $this->number_include, '<br />';
        echo 'Symbol_Include is: ', $this->symbol_include, '<br /><br />';

        $this->length = $p_len;
        $this->password = "xxxxxxxx";
        //$this->password[0] = $this->length;
        $n = 0;
        while ($n < $this->length) {
            
            echo 'N is: ', $n, ' Password is:', $this->password, ' <br />';

// choose a character type
            $dice = rand(0, 3); // roll the dice
            
            // check if the dice value was valid, otherwise roll again
            if($dice)
            
            echo 'Dice Roll Result was: ', $dice, ' <br/> ';
            switch ($dice) {
                case alpha_upper_include: {// alpha_upper
                        echo 'Its an alpha Upper Case';
                        if ($this->alpha_upper_include == TRUE) {

                            $txt = chr(rand(1, 26));
                            echo $txt;
                            $this->password[$n] = strtoupper($txt);
                        } else {
                            echo 'alpha_upper_include must have been false <br />';
                        }

                        break;
                    }
                case alpha_lower_include: { // alpha_lower
                        echo 'Its a Lower Case Alpha';
                        if ($this->alpha_lower_include == TRUE) {
                            $txt = chr(rand(1, 26));
                            echo $txt;
                            $this->password[$n] = strtolower($txt);
                        }
                        break;
                    }
                case number:{// number
                    echo 'Its a Number: ';
                    if ($this->number_include == TRUE) {
                        $this->password[$n] = rand(0, 9);
                    }

                    break;}
                case symbol:{// symbol
                    echo 'Its a Symbol: ';
                    if ($this->symbol_include == TRUE) {
                        // TODO include more symbols to chose from!
                        $this->password[$n] = '!';
                    }

                    break;}
            } // end switch
            $n++;
        } // end while
        return $this->password;
    }

// end function GeneratePassword
}

// end Class Pasword
?>
