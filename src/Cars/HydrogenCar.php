<?php

namespace App\Cars;
use App\Cars\Car;
use App\Cars\Behaviors\Emissions\EmitsWaterSteam;
use App\Cars\Behaviors\Refills\RefillsWithHydrogen;
use App\Cars\Behaviors\Feedbacks\FeedbackeCall;

class HydrogenCar extends Car
{
    public function __construct()
    {
        $this->emissionBehavior = new EmitsWaterSteam();
        $this->refillBehavior = new RefillsWithHydrogen();
        $this->feedbackBehavior = new FeedbackeCall();
    }
}