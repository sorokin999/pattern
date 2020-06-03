<?php

namespace App\Cars;
use App\Cars\Car;
use App\Cars\Behaviors\Emissions\EmitsNothing;
use App\Cars\Behaviors\Refills\RefillsWithElectricity;
use App\Cars\Behaviors\Feedbacks\Feedback112;

class ElectricCar extends Car
{
    public function __construct()
    {
        $this->emissionBehavior = new EmitsNothing();
        $this->refillBehavior = new RefillsWithElectricity();
        $this->feedbackBehavior = new Feedback112();
    }
}