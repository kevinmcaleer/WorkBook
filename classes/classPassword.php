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

        $this->password = "xxxxxxxx";
        $this->length = $p_len;
//$this->password[0] = $this->length;
        $n = 0;
        
        echo 'Starting Length is: ', $this->length, '<br />';
        while ($n < $this->length)
        {
            echo $n, '<br />';
            $n++;
            $dice =rand(0,4);
            echo 'Dice is: ', $dice;
            
        }
            
        /*
        while ($n < $this->length) {
            $n++;
            echo 'N is: ', $n, ' Password is:', $this->password, ' <br />';

// choose a character type
            $dice = rand(0, 3); // roll the dice
// check if the dice value was valid, otherwise roll again

            echo 'Dice Roll Result was: ', $dice, ' <br/> ';

            if ($dice == alpha_upper_include) {
                $txt = chr(rand(1, 26));
                echo $txt;
                $this->password[$n] = strtoupper($txt);
            } elseif ($dice == alpha_lower_include) {
                $txt = chr(rand(1, 26));
                echo $txt;
                $this->password[$n] = strtolower($txt);
            } elseif ($dice == number) {
                echo 'its a number';
                $this->password[$n] = rand(0, 9);
            } elseif ($dice == symbol) {
                echo 'its a symbol';
                $this->password[$n] = '!';
            }
        } // end while
        return $this->password;
         */ 
    }

         
// end function GeneratePassword
}

// end Class Pasword
?>
