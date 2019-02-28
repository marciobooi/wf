<?php

function divide(int $value, int $by): float {
    if ($by ==0){
        throw new RuntimeException('Division by 0 is not allowed');
    }
    return(float)($value/$by);
}


function arrayDivide(array $baseArray, int $by) : array {
    $result = [];

    foreach ($baseArray as $base) {
        try {
            $result[] = divide ($base, $by);
        } catch(RuntimeException $exception) {
            echo $exception->getMessage();
            $result[] = $base;
        }
    }

    return $result;
}