<?php

$a = 10; // могут изменяться
$b = 0; // могут изменяться

echo "\$a = " . $a . "<br>";
echo "\$b = " . $b . "<br><br>";

$operator_arr = array ('+', '-', '/', '*' , '%');
$result = 0;
$echo_result = "";

foreach ($operator_arr as $operator)
{
    switch ($operator)
    {
        case '+':
            $result = $a + $b;
            $echo_result = $a . $operator . $b  . " = " . $result . "<br>";
            echo $echo_result;
            break;
        case '-':
            $result = $a - $b;
            $echo_result = $a . $operator . $b  . " = " . $result . "<br>";
            echo $echo_result;
            break;
        case '/':
            ($b == 0) ? $result = "На ноль делить нельзя"
                      : $result = $a / $b;
            $echo_result = $a . $operator . $b  . " = " . $result . "<br>";
            echo $echo_result;
            break;
        case '*':
            $result = $a * $b;
            $echo_result = $a . $operator . $b  . " = " . $result . "<br>";
            echo $echo_result;
            break;
        case '%':
            ($b == 0) ? $result = "На ноль делить нельзя"
                      : $result = $a % $b;
            $echo_result = $a . $operator . $b  . " = " . $result . "<br>";
            echo $echo_result;
            break;
    }
}


