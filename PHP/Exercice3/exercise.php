<?php

$input;


$winnerA = 0;
$winnerB = 0;

foreach ($input as $value)
    if ($value[0]>$value[1]){
        $winnerA++;
    } else if ($value[0]<$value[1]){
        $winnerB++;
    }
else{};

if ($winnerA>$winnerB){
    $winner = 'A';
} else {
    $winner = 'B';
}



