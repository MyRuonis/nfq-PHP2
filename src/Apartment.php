<?php

namespace Apartment;

use Room\Room;

class Apartment extends Room
{
    protected $bedCount = 4;
    protected $roomType = "Diamond";
    protected $hasRestroom = true;
    protected $extras = array("TV", "air-conditioner", "refrigerator", "kitchen box", "mini-bar", "bathtub", "free Wi-fi");
    protected $hasBalcony = true;

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