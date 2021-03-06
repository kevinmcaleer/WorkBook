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
        /*
          echo 'password is: ', $this->password, '<br />';
          echo 'Lenth is: ', $this->length, '<br />';
          echo 'Alpha_upper_include is: ', $this->alpha_upper_include, '<br />';
          echo 'Alpha_lower_include is:', $this->alpha_lower_include, '<br />';
          echo 'Number_include is: ', $this->number_include, '<br />';
          echo 'Symbol_Include is: ', $this->symbol_include, '<br /><br />';
         */
        $this->password = "xxxxxxxx";
        $this->length = $p_len;
//$this->password[0] = $this->length;
        $n = 0;

        //  echo 'Starting Length is: ', $this->length, '<br />';
        while ($n < $this->length) {
            //  echo 'N is: ', $n, '<br />';

            $dice = rand(0, 3);



            // echo 'Dice is: ', $dice, ' ';
            if ($dice == 0 AND $this->alpha_upper_include) {
                // alpha upper
                // echo 'alpha upper';
                $ch = rand(97, 122);
                // echo 'ch = ', $ch, ' ';
                $txt = chr($ch);
                //echo ' ASCII: ', $txt, ' ';
                $this->password[$n] = strtoupper($txt);
                $n++;
            } elseif ($dice == 1 AND $this->alpha_lower_include) {
                //echo 'alpha lower';
                $ch = rand(65, 90);
                // echo 'ch = ', $ch, ' ';
                $txt = chr($ch);
                // echo ' ASCII: ', $txt, ' ';
                $this->password[$n] = strtolower($txt);
                $n++;
            } elseif ($dice == 2 AND $this->number_include) {
                // echo 'number';
                $ch = rand(48, 57);
                $txt = chr($ch);
                // echo 'ASCII ', $txt, ' ';
                $this->password[$n] = $txt;
                $n++;
            } elseif ($dice == 3 AND $this->symbol_include) {
                //echo 'symbol';
                $ch = rand(33, 47);
                if ($ch = 34 or $ch = 39) {
                    $ch = 45;
                }
                $txt = chr($ch);
                // echo ' ASCII: ', $txt, ' ';
                $this->password[$n] = $txt;
                $n++;
            }
        }
        // echo ' ', $this->password, ' <br />';

        return $this->password;
    }

// end function GeneratePassword
}

// end Class Pasword
?>
