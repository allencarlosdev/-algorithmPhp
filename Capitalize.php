<?php
/**
 * Capitalize each word.
 *
 * @method static string get(string $string)
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */


 class Capitalize {
    public static function Upper($phrases){
        echo ucwords($phrases);
    }
 }

 Capitalize::Upper("hello there");
 echo "<br/>";
 Capitalize::Upper("hey, so it's working!");
?>