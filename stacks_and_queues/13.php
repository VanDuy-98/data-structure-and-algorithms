<?php
include_once("stack.php");

function reverseString($stack, $string)
{
    $result = "";
    for ($i = 0; $i < strlen($string); $i++) {
        $stack->push($string[$i]);
    }

    while (!$stack->isEmpty()){
        $result .= $stack->top();
        $stack->pop();
    }

    return $result;
}

$stack = new Stack();
$reverseString = reverseString($stack, "hello");
echo $reverseString;

