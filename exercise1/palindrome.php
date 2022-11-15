<?php
/**
 * Palindrome is a string that equals itself when reversed.
 * Non-alpha chars must also be included.
 *
 * @method static bool check(string $string)
 * @example Palindrome::check('asddsa')  === true
 * @example Palindrome::check('asdd')  === false
 */

    class Palindrome {
        public static function reverse($string){
            $stringReverse = strrev($string);

            if ($stringReverse === $string) {
                echo 'The word " ' .$string. '" is a Palindrome';
            } else {
                echo 'The word " ' .$string. '" is Not a Palindrome';
            }

        }

    }

    Palindrome::reverse("refer");


?>