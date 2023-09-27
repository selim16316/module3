<?php
// Create the array
$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($inputArray)
{
    arsort($inputArray);

    print_r($inputArray) . "\n";
}

sortGradesDescending($grades);
