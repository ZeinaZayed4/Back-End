<?php
// 1- Check The Number Is Even or Odd
$num = 4;
if ($num % 2 == 0) {
    echo "{$num} is an even number";
} else {
    echo "{$num} is an odd number";
}
echo '<br>';

// 2- Fizz Buzz Game
for($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
    echo " ";
}
echo '<br>';

// 3- Reverse String
$greeting = "welcome";
$newGreeting = "";
for ($i = strlen($greeting) - 1; $i >= 0; $i--) {
    $newGreeting .= $greeting[$i];
}
echo $newGreeting; // emoclew
echo '<br>';
// OR
echo strrev($greeting); // emoclew
echo '<br>';

// 4- Compute Circle Area and Circumference
$radius = 7;
$area = pi() * $radius ** 2;
$circumference = 2 * pi() * $radius;
echo "Area of radius {$radius} is: {$area}<br>";
echo "Circumference of radius {$radius} is: {$circumference}<br>";

// 5- check two given numbers and return true if one of the number is 50 or if their sum is 50.
$x = 20;
$y = 30;
$check = $x == 50 || $y == 50 || ($x + $y == 50);
echo $check . '<br>';

// 6- check from two given integers, whether one is positive and another one is negative.
$n1 = -10;
$n2 = 10;
if($n1 > 0 && $n2 < 0) {
    echo "First number is positive, second is negative.<br>";
} elseif ($n1 < 0 && $n2 > 0) {
    echo "First number is negative, second is positive.<br>";
}

// 7- check whether a given positive number is a multiple of 5 or a multiple of 8.
$n3 = 40;
if ($n3 % 8 == 0 || $n3 % 5 == 0) {
    echo "{$n3} is a multiple of 8 or 5.<br>";
} else {
    echo "{$n3} is not a a multiple of 8 or 5.<br>";
}

// 8- find the largest of three given integers
$n4 = 10; $n5 = 8; $n6 = 12;
if ($n4 >= $n5 && $n4 >= $n6) {
    echo "{$n4} is the largest between {{$n4}, {$n5}, {$n6}}.<br>";
} else if ($n5 >= $n4 && $n5 >= $n6) {
    echo "{$n5} is the largest between {{$n4}, {$n5}, {$n6}}.<br>";
} else {
    echo "{$n6} is the largest between {{$n4}, {$n5}, {$n6}}.<br>";
}

// 9- Compute The sum of the numbers from 1 to 10
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
echo "Sum of numbers from 1 to 10 is: {$sum}<br>";

// 10- display the pattern like right angle triangle using an asterisk.
//*
//**
//***
//****
//*****
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

// 11- check whether a given number is positive or negative.
$n7 = -2;
if ($n7 > 0) {
    echo "{$n7} is a positive number.<br>";
} elseif ($n7 < 0){
    echo "{$n7} is a negative number.<br>";
} else {
    echo "{$n7} is zero.<br>";
}

// 12-store elements in an array and print it.
$arr = array();
for ($i = 1; $i <= 10; $i++) {
    $arr[] = $i;
}
print_r($arr);
echo '<br>';

// 13- print the sum of two numbers
$n8 = 10; $n9 = 2;
echo "Sum of {$n8} + {$n9} = " . ($n8 + $n9) . '<br>';

// 14- calculate the factorial of a given number
function factorial($n) {
    if ($n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
$n10 = 5;
$fact = factorial($n10);
echo "Factorial {$n10} is: {$fact}.<br>";

// 15- Create Simple Calculator (+ , - , * , /)
$operation = '*';
$n11 = 8; $n12= 4;
switch ($operation) {
    case '+':
        echo "{$n11} + {$n12} = " . ($n11 + $n12) . '<br>';
        break;
    case '-':
        echo "{$n11} - {$n12} = " . ($n11 - $n12) . '<br>';
        break;
    case '*':
        echo "{$n11} * {$n12} = " . ($n11 * $n12) . '<br>';
        break;
    case '/':
        echo "{$n11} / {$n12} = " . ($n11 / $n12) . '<br>';
        break;
}