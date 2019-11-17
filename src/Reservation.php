<?php

namespace Reservation;

class Reservation
{
    protected $guest;
    protected $startDate;
    protected $endDate;

    public function __toString()
    {
        return $this->guest->firstName . " " . $this->guest->firstName . " from " . $this->startDate . " to " . $this->endDate;
    }
}