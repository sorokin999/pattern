<?php

namespace App\Cars\Behaviors\Emissions;
use App\Cars\Interfaces\EmissionType;

class EmitsWaterSteam implements EmissionType
{
    public function emit()
    {
        return "Water steam";
    }
}