<?php

use Mockery\Undefined;

/**
 * Find the most used character.
 *
 * @method static string get(string $string)
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */

class MaxChar {
    public static function countLetter($word){
        $strArray = count_chars($word, 1);
        $countMaxChar =0;
        $keyMaxChar = null;
        foreach ($strArray as $key => $value) {
            echo chr($key). " = " . $value ."<br/>";

            if ($value > $countMaxChar) {
                $countMaxChar = $value;
                $keyMaxChar = $key;
            }
        }

        echo '<br/>This is the most repeated value " '.chr($keyMaxChar).' "'." was found $countMaxChar time";
    }
}

MaxChar::countLetter("qqqweqrtye");


?>
