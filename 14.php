<?php
include_once ("stack.php");

function stackBin($stack, $number)
{
    $result = "";
    while ($number > 0){
        $stack->push($number % 2);
        $number = floor($number / 2);
    }

    while (!$stack->isEmpty()){
        $result .= $stack->top();
        $stack->pop();
    }

    return $result;
}

$stack = new Stack();
$binaryNumber = stackBin($stack, 13);
echo (int) $binaryNumber;
