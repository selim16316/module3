<?php
$numbers = range(1, 10);

function removeEvenNumbers($inputArray) {
    $filter = array_filter($inputArray, function ($value) {
        return $value % 2 != 0; 
    });

    return $filter;
}

$result = removeEvenNumbers($numbers);
print_r($result) . "\n";
?>
