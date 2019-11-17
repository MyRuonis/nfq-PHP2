<?php

namespace Room;

use ReservableInterface\ReservableInterface;

class Room implements ReservableInterface
{
    protected $roomType;
    protected $hasRestroom;
    protected $hasBalcony;
    protected $bedCount;
    protected $roomNumber;
    protected $extras;
    protected $price;
    protected $reservations = array();

    public function addReservation($reservation)
    {
        array_push($this->reservations, $reservation);
    }

    public function removeReservation($reservation)
    {
        $place = -1;
        for($i = 0; $i < count($this->reservations); $i++)
        {
            if($this->reservations[$i] === $reservation)
            {
                $place = $i;
            }
        }

        if($place !== -1)
        {
            for($i = $place; $i < count($this->reservations)-1; $i++)
            {
                $this->reservations[$i] = $this->reservations[$i+1];
            }
            echo 'Removed Reservation';
        }

        else echo 'Reservation not found';
    }

    public function __toString()
    {
        $response = $this->roomType . " room, restroom " . $this->hasRestroom . ", balcony " . $this->hasBalcony . ", " .
            $this->bedCount . " bed(s)";
        for($i = 0; $i < count($this->extras); $i++)
        {
            $response = $response . ", " . $this->extras[$i];
        }

        $response = $response . ", " . count($this->reservations) . " reservations.";
        return $response;
    }
}