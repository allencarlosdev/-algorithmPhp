<?php
/**
 * Count string vowels (aeiou).
 *
 * @method static int count(string $string)
 * @example Vowels::count('Hello!')  === 2
 * @example Vowels::count('Why?')  === 0
 */

  class Vowels {
    public static function count($string){
        $strArray = str_split($string);
        $countVowels= 0;


        foreach ($strArray as $key => $value) {
                $letter= strtolower($value);
            if (( $letter === "a" ) || ( $letter  ==="e")|| ( $letter  ==="i")|| ( $letter  ==="o")|| ( $letter  ==="u")) {
                $countVowels++;
        }
    }
    echo 'The word " '.$string.' " has '.$countVowels." vowels";

 }
}

 Vowels::count('Hello');
 echo "<br/>";
 Vowels::count('why');
 echo "<br/>";
 Vowels::count('around');

?>