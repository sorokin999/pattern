<?php

namespace App\Cars\Behaviors\Emissions;
use App\Cars\Interfaces\EmissionType;

class EmitsCO2 implements EmissionType
{
    public function emit()
    {
        return "CO2";
    }
}