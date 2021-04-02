<?php

class Queue
{
    public $size;
    public $array;

    function __construct($array = array(), $size = 0)
    {
        $this->array = $array;
        $this->size = $size;
    }

    function size()
    {
        return $this->size;
    }

    function isEmpty()
    {
        return empty($this->array);
    }

    function front()
    {
        reset($this->array);
        return current($this->array);
    }

    function back()
    {
        return end($this->array);
    }

    function push($item)
    {
        array_push($this->array, $item);
        $this->size++;
    }

    function pop()
    {
        if ($this->isEmpty()) {
            echo "queue is empty";
        } else {
            $this->size--;
            return array_shift($this->array);
        }
    }
}
