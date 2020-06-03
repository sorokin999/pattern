<?php

namespace App\Cars\Behaviors\Refills;
use App\Cars\Interfaces\RefillType;

class RefillsWithHydrogen implements RefillType
{
    public function refill()
    {
        return "Hydrogen";
    }
}