<?php

include_once("stack.php");

function encodeString($stack, $string)
{
    $result = "";
    $string .= "*";

    for ($i = 0; $i < strlen($string); $i++) {
        if ($stack->isEmpty() || $stack->top() == $string[$i]) {
            $stack->push($string[$i]);

        } else {
            $occurrence = 0;
            $result .= $stack->top();

            while (!$stack->isEmpty()) {
                $occurrence++;
                $stack->pop();
            }
            $result .= $occurrence;
            $stack->push($string[$i]);
        }
    }
    return $result;
}

$stack = new Stack();
echo encodeString($stack, "aaabbaaac");
