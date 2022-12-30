<?php

use JetBrains\PhpStorm\Pure;

class Item
{
    public function getDescription()
    {
        return $this->getId() . $this->getToken();
    }

    protected function getId() : int
    {
        return rand();
    }

    private function getToken() : string
    {
        return uniqid();
    }
}