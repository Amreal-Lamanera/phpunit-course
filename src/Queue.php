<?php

use JetBrains\PhpStorm\Pure;

class Queue
{
    protected array $items = [];

    public function push($item)
    {
        $this->items[] = $item;
    }

    public function pop()
    {
        return array_shift($this->items);
    }

    /**
     * @return int the number of items
     */
    public function getCount()
    {
        return count($this->items);
    }
}