<?php

namespace App\Cars;
use App\Cars\Car;
use App\Cars\Behaviors\Emissions\EmitsCO2;
use App\Cars\Behaviors\Refills\RefillsWithGasoline;
use App\Cars\Behaviors\Feedbacks\FeedbackEra;

class GasolineCar extends Car
{
    public function __construct()
    {
        $this->emissionBehavior = new EmitsCO2();
        $this->refillBehavior = new RefillsWithGasoline();
        $this->feedbackBehavior = new FeedbackEra();
    }
}