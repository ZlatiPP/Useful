<?php

$numbers = []; // 1, 2, 3... 1000

$my_number = 0; // target

sort($numbers);

$low = 0;
$high = count($numbers) - 1;
$tries = 0;

while ($low <= $high) {
    $tries++;
    $mid = (int)(($low + $high) / 2);
    if ($numbers[$mid] < $my_number) {
        $low = $mid + 1;
    } elseif ($numbers[$mid] > $my_number) {
        $high = $mid - 1;
    } else {
        echo "Found $my_number after $tries tries.";
        break;
    }
}

if ($low > $high) {
    echo "Could not find $my_number after $tries tries.";
}
