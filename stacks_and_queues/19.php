<?php
include_once("queue.php");

function messagesPhone($queue, $a, $k)
{
    foreach ($a as $item) {
        if ($queue->size < $k) {
            if (!messagesDisplayed($queue->array, $item)) {
                $queue->push($item);
            }
        } else {
            $queue->pop();
            $queue->push($item);
        }
    }
    return implode(" ", $queue->array);
}

function messagesDisplayed($array, $item)
{
    foreach ($array as $value) {
        if ($value == $item) {
            return true;
        }
    }
    return false;
}

$queue = new Queue();
$a = array(1, 2, 1, 3, 4);
$k = 3;

echo messagesPhone($queue, $a, $k);
