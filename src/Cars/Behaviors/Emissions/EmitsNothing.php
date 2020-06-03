<?php

namespace App\Cars\Behaviors\Emissions;
use App\Cars\Interfaces\EmissionType;

class EmitsNothing implements EmissionType
{
    public function emit()
    {
        return "Nothing";
    }
}