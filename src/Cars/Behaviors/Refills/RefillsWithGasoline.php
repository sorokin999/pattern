<?php

namespace App\Cars\Behaviors\Refills;
use App\Cars\Interfaces\RefillType;

class RefillsWithGasoline implements RefillType
{
    public function refill()
    {
        return "Gasoline";
    }
}