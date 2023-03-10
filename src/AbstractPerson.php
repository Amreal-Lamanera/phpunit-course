<?php

abstract class AbstractPerson
{
    protected string $surname;

    public function __construct(string $surname)
    {
        $this->surname = $surname;
    }

    abstract protected function getTitle();

    /**
     * @return string
     */
    public function getNameAndTitle(): string
    {
        return $this->getTitle() . ' ' . $this->surname;
    }
}