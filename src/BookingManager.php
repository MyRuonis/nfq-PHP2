<?php

namespace BookingManager;

include 'Room.php';

class BookingManager
{
    static function bookRoom($room, $reservation)
    {
        for($i = 0; $i < count($room->reservations); $i++)
        {
            if($room->reservations[$i] === $reservation)
            {
                echo "Error, reservation canceled.";
                return;
            }
        }

        $room->addReservation($reservation);
        echo "Reservation completed.";
    }
}