<?php

namespace SingleRoom;

use Room\Room;

class SingleRoom extends Room
{
    protected $bedCount = 1;
    protected $roomType = "Standard";
    protected $hasRestroom = true;
    protected $extras = array("TV", "air-conditioner");
    protected $hasBalcony = false;

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