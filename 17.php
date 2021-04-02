<?php
include_once ("queue.php");
function queue($queue, $array, $k)
{
    $result = "";
    for ($i = 0; $i < count($array); $i++){
        $queue->push($array[$i]);
    }

    while ($k != 0)
    {
        $queue->push($queue->pop());
        $k--;
    }

    while(!$queue->isEmpty())
    {
        $result .= $queue->front() . " ";
        $queue->pop();
    }
    return $result;
}

$queue = new Queue();
$array = array(1, 3, 2);
echo queue($queue, $array, 2);
