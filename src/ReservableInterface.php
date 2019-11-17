<?php

namespace ReservableInterface;

interface ReservableInterface
{
public function addReservation($reservation);
public function removeReservation($reservation);
}