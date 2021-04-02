<?php

class Stack
{
    public $stack;
    public $limit;

    function __construct($stack = array(), $limit = 10)
    {
        $this->stack = $stack;
        $this->limit = $limit;
    }

    function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "stack is full";
        }
    }

    function pop()
    {
        if ($this->isEmpty()) {
            echo "stack is empty";
        } else {
            return array_shift($this->stack);
        }
    }

    function top()
    {
        return current($this->stack);
    }

    function isEmpty()
    {
        return empty($this->stack);
    }
}
