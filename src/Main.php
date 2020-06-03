<?php

namespace App;

use App\Calculator;
use Locator\Locator;
use convertor\Convertor;

use App\Cars\GasolineCar;
use App\Cars\HydrogenCar;
use App\Cars\ElectricCar;

class Main
{
    public function run()
    {
     $porshe911 = new GasolineCar();
     print_r($porshe911->performEmit());
     print_r(" ");
     print_r($porshe911->performRefill());
     print_r(" ");
     print_r($porshe911->executeFeedback());
     print_r("\n");

     $teslaModelS = new ElectricCar();
     print_r($teslaModelS->performEmit());
     print_r(" ");
     print_r($teslaModelS->performRefill());
     print_r(" ");
     print_r($teslaModelS->executeFeedback());
     print_r("\n");

     $toyotaMirai = new HydrogenCar();
     print_r($toyotaMirai->performEmit());
     print_r(" ");
     print_r($toyotaMirai->performRefill());
     print_r(" ");
     print_r($toyotaMirai->executeFeedback());
     print_r("\n");
    }
}