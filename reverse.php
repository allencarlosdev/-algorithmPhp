<?php
/**
 * Create methods that reverse given input by its positions.
 *
 * @method static int int(int $number)
 * @method static string string(string $string)
 * @example Reverse::int(12) === 21
 * @example Reverse::int(912) === 219
 * @example Reverse::int(120) === 21
 * @example Reverse::int(-12) === -21
 * @example Reverse::int(-120) === -21
 * @example Reverse::string('qwerty')  === 'ytrewq'
 * @example Reverse::string('apple')  === 'elppa'
 */

class reverseComplete {
    public static function string1($string) {
        echo strrev($string);
    }
}

reverseComplete::string1("67");
echo"<br/>";
reverseComplete::string1("home");
?>