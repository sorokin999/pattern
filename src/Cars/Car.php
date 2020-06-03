<?php

namespace App\Cars;


class Car
{
    public $emissionBehavior;
    public $refillBehavior;

    public function performEmit(){
        return $this->emissionBehavior->emit();
    }

    public function performRefill(){
        return $this->refillBehavior->refill();
    }

    public function executeFeedback(){
        return $this->feedbackBehavior->feedback();
    }
}