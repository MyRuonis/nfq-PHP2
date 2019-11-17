<?php

namespace Bedroom;

use Room\Room;

class Bedroom extends Room
{
    protected $bedCount = 2;
    protected $roomType = "Gold";
    protected $hasRestroom = true;
    protected $extras = array("TV", "air-conditioner", "refrigerator", "mini-bar", "bathtub");
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