<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations, standard order of operations
// echo ($a + $b) * $c;
// echo ($a + $b) * $c . '<br>';
// echo $a -= $b . '<br>';
// echo $a *= $b . '<br>';
// echo $a /= $b . '<br>';
// echo $a %= $b . '<br>';

// Assignment with math operators
// $a += $b; echo $a.'<br>';
// Increment operator
echo $a++ .'<br>'; // value of a is printed and then increased by 1
echo ++$a .'<br>'; // value of a is increased and then printed   
// Decrement operator
echo $a-- .'<br>';
echo --$a . '<br>';
// Number checking functions
is_float(1.24); // true
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); // true
is_numeric("3.45ssdfg"); // false
// Conversion https://youtu.be/2eebptXfEvw?t=2566
$strNumber = '12.34';
// $number = (float)$strNumber;
$number = (int)$strNumber;
var_dump($number);
echo '<br>';
// Number functions
echo "abs(-15) " . abs(-15) . '<br>'; 
echo "pow(2,3) " . pow(2,3) . '<br>'; 
echo "sqrt(16) " . sqrt(16) . '<br>'; 
echo "max(2,3) " . max(2,3) . '<br>'; 
echo "min(2,3) " . min(2,3) . '<br>'; 
echo "round(2.4) " . round(2.4) . '<br>'; 
echo "round(2.5) " . round(2.5) . '<br>'; 
// Formatting numbers

// https://www.php.net/manual/en/ref.math.php
