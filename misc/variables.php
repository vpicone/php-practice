<?php
#Variables
/*
    - Prefix with $
    - Start with a letter or an underscore
    - Case sensitive
 */

#Data tyoes
/*
    - Strings, Integers, floats (decimals), Booleans T/F
 */
$output = 'Hello';
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = 'Hello';
$string2 = 'World';

#single quotes doesn't parse variables, double quotes will.
$greeting = $string1 . ' ' . $string2 . '!';

// like backticks, interpolates the values in strings
$greeting2 = "$string1 $string2";

$string3 = 'They\'re Here';

echo $string3;
echo $greeting2;
?>

