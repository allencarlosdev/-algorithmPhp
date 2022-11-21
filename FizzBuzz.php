<?php


/**
 * Print numbers from 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @method static void print(int $limit)
 * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
 */
class FizzBuzzComplete
{
    function __construct($limit){
        $this->limite = $limit;
    }
    public function getFizz()
    {
        for ($i = 1; $i <= $this->limite; ++$i) {
            $word = '';
            if($i % 3 === 0 && $i % 5 === 0){
                $word .= 'fizzBuzz';
            }elseif ($i % 3 === 0) {
                $word .= 'fizz';
            }elseif($i % 5 === 0) {
                $word .= 'buzz';
            }else{
                echo '<br/>'. $i;
            }

            echo '<br/>'.$word ?: $i;
        }
    }
}

$operacion = new FizzBuzzComplete(30);

echo $operacion->getFizz();
?>
