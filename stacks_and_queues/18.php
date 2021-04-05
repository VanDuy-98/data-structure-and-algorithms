<?php
include_once("queue.php");

function superPrimeNumber($queue, $n)
{
    $result = "";
    for ($i = 0; $i < $n; $i++) {
        if (isSuperPrime($i)) {
            $queue->push($i);
        }
    }

    while (!$queue->isEmpty())
    {
        $result .= $queue->front() . " ";
        $queue->pop();
    }

    return $result;
}

function isPrime($n)
{
    if ($n < 2) {
        return false;
    } else {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

function isSuperPrime($n)
{
    if ($n < 2) {
        return false;
    } else {
        while ($n > 0) {
            if (!isPrime($n)) {
                return false;
            }
            $n = (int)($n / 10);
        }
        return true;
    }
}

$queue = new Queue();
$result = superPrimeNumber($queue, 10000);
echo $result;
