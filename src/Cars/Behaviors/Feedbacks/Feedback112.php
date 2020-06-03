<?php

namespace App\Cars\Behaviors\Feedbacks;
use App\Cars\Interfaces\FeedbackType;

class Feedback112 implements FeedbackType
{
    public function feedback()
    {
        return "Служба спасения 112";
    }
}