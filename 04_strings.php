<?php

// Create simple string
$name = 'Godzilla';
$string = 'Hello .$name I am always 42 years old'; // singe quotes just string
$string2 = "Hello $name I am always 42 years old"; // double quotes can use variables
echo $string.'<br>';
echo $string2.'<br>';
// String concatenation

echo 'Hello'.' World'.' and PHP'.'<br>' ;

// String functions
echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim ($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strlen($string) . '<br>';
echo "8 - " . strlen($string) . '<br>';
echo "9 - " . strlen($string) . '<br>';
echo "10 - " . strlen($string) . '<br>';
echo "11 - " . strlen($string) . '<br>';
echo "12 - " . strlen($string) . '<br>';
echo "13 - " . strlen($string) . '<br>';
// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php