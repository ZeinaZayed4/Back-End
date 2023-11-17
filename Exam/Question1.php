<?php

// 1
$somerar = 15;
function aditt() {
    global $somerar;
    $somerar++;
    echo "somerar is $somerar" . '<br>';
}
aditt();
// Output: somerar is 16

// 2
$arr = array(5 => 1, 12 => 2);
$arr[] = 56;
$arr['x'] = 42;
print_r($arr);
unset($arr);
echo var_dump($arr) . '<br>'; // Warning(undefined variable) + NULL

// 3
$var = 'false';
if ($var) {
    echo 'true';
} else {
    echo 'false';
}
// Output: true