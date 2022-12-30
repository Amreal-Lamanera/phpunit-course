<?php

class ItemChild extends Item
{
    public function getId(): int
    {
        return parent::getId();
    }
//    non si può fare perché privato
//    public function getToken(): string
//    {
//        return parent::getToken();
//    }
}