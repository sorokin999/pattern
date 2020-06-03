<?php

namespace App\Cars\Behaviors\Refills;
use App\Cars\Interfaces\RefillType;

class RefillsWithElectricity implements RefillType
{
    public function refill()
    {
        return "Electricity";
    }
}