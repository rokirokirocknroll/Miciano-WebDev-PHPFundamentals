<!DOCTYPE html>
<html>
<head> <title> PHP fundamentals </title>
<style>body {font-family:Arial,Helvetica, sans-serif; font-size: 16px;}</style>
<body>
<h1>PHP fundamentals</h1>
<p>PHP script to display the text Hello World, variables and the current date.</p>
<hr>


<?php

// This is a one line comment
/*
* This is a multiple line comment
* example
*/

$hello = "Hello World";
// The line above shows creation of a variable

Echo "Hello World <br />";
// The line above shows how to print in PHP

ECHO "Hello World <br />";
// The line above shows case sensitivity of Echo

echo "$hello <br /><br /> ";
// The line above shows application of the variable hello

$firstNumber = 10;

$secondNumber = 20;

$thirdNumber = 30;

$sum = $firstNumber + $secondNumber + $thirdNumber;

$firstArray = array($firstNumber, $secondNumber,$thirdNumber);

Echo "The total sum of the three numbers $firstArray[0] , $firstArray[1] and $firstArray[2] is $sum <br /> <br />"; 

$floatNumber = 2.5;

Echo var_dump($floatNumber);
Echo "<br />";

Echo var_dump($firstNumber);
Echo "<br />";

$floatToInt = (int) $floatNumber;
Echo var_dump ($floatToInt);
Echo "<br />";

$stringValue = 'This is a string, isn\'t it';

Echo $stringvalue;
Echo "<br />;

$today = date('Y-m-d');
echo "<p><b>Today is $today </b></p>";
?>



</body>
</html> 