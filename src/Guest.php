<?php

namespace Guest;

class Guest
{
    public $firstName;
    public $lastName;

    public function __toString()
    {
        return $this->firstName . " " . $this->lastName;
    }
}