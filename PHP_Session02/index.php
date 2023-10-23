<?php
// 1- Check The Number Is Even or Odd
function evenOdd($num) {
    if ($num % 2 == 0) {
        return "{$num} is an even number.<br>";
    }
    return "{$num} is an odd number.<br>";
}
$even_odd = evenOdd(4);
echo $even_odd;


// 2- Fizz Buzz Game
function FizzBuzz($num) {
    for($i = 1; $i <= $num; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "{$i}: FizzBuzz<br>";
        } elseif ($i % 3 == 0) {
            echo "{$i}: Fizz <br>";
        } elseif ($i % 5 == 0) {
            echo "{$i}: Buzz<br>";
        } else {
            echo $i . '<br>';
        }
        echo " ";
    }
}
FizzBuzz(20);


// 3- Reverse String
function reverse($str) {
    $newGreeting = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $newGreeting .= $str[$i];
    }
    return $newGreeting;
}
echo reverse("welcome");
echo '<br>';


// 4- Compute Circle Area and Circumference
function Circle($r) {
    $area = pi() * $r ** 2;
    $circumference = 2 * pi() * $r;
    echo "Area of radius {$r} is: {$area}<br>";
    echo "Circumference of radius {$r} is: {$circumference}<br>";
}
Circle(14);


// 5- check two given numbers and return true if one of the number is 50 or if their sum is 50.
function checker($x, $y) {
    return $x == 50 || $y == 50 || ($x + $y == 50);
}
echo checker(20, 50) . '<br>';


// 6- check from two given integers, whether one is positive and another one is negative.
function pos_neg($x, $y) {
    if($x > 0 && $y < 0) {
        echo "First number {$x} is positive, second {$y} is negative.<br>";
    } elseif ($x < 0 && $y > 0) {
        echo "First number {$x} is negative, second {$y} is positive.<br>";
    }
}
pos_neg(-2, 4);


// 7- check whether a given positive number is a multiple of 5 or a multiple of 8.
function five_eight($num) {
    if ($num % 8 == 0 || $num % 5 == 0) {
        echo "{$num} is a multiple of 8 or 5.<br>";
    } else {
        echo "{$num} is not a multiple of 8 or 5.<br>";
    }
}
five_eight(40);


// 8- find the largest of three given integers
function largestNum($x, $y, $z) {
    if ($x >= $y && $x >= $z) {
        echo "{$x} is the largest between {{$x}, {$y}, {$z}}.<br>";
    } else if ($y >= $x && $y >= $z) {
        echo "{$y} is the largest between {{$x}, {$y}, {$z}}.<br>";
    } else {
        echo "{$z} is the largest between {{$x}, {$y}, {$z}}.<br>";
    }
}
largestNum(4, 8, 2);


// 9- Compute The sum of the numbers from 1 to 10
function sum() {
    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        $sum += $i;
    }
    return $sum;
}
$sumToTen = sum();
echo "Sum of numbers from 1 to 10 is: {$sumToTen}<br>";

// 10- display the pattern like right angle triangle using an asterisk.
//*
//**
//***
//****
//*****
function pattern() {
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
}
pattern();


// 11- check whether a given number is positive or negative.
function positive_negative($num) {
    if ($num > 0) {
        echo "{$num} is a positive number.<br>";
    } elseif ($num < 0){
        echo "{$num} is a negative number.<br>";
    } else {
        echo "{$num} is zero.<br>";
    }
}
positive_negative(-2);


// 12-store elements in an array and print it.
function arr(...$args) {
    $new_arr = array();
    foreach ($args as $arg) {
        $new_arr[] = $arg;
    }
    return $new_arr;
}
$arr1 = arr(12, 8, 6, 4, 10, 20);
echo '<pre>';
print_r($arr1);
echo '</pre>';


// 13- print the sum of two numbers
function sumTwo($x, $y) {
    echo "Sum of {$x} + {$y} = " . ($x + $y) . '<br>';
}
sumTwo(10, 2);


// 14- calculate the factorial of a given number
function factorial($n) {
    if ($n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
$n = 5;
$fact = factorial($n);
echo "Factorial {$n} is: {$fact}.<br>";

// 15- Create Simple Calculator (+ , - , * , /)
function calculator($x, $op, $y) {
    switch ($op) {
        case '+':
            echo "{$x} + {$y} = " . ($x + $y) . '<br>';
            break;
        case '-':
            echo "{$x} - {$y} = " . ($x - $y) . '<br>';
            break;
        case '*':
            echo "{$x} * {$y} = " . ($x * $y) . '<br>';
            break;
        case '/':
            echo "{$x} / {$y} = " . ($x / $y) . '<br>';
            break;
    }

}
calculator(8, '+', 4);