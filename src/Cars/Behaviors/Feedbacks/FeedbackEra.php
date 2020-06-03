<?php

namespace App\Cars\Behaviors\Feedbacks;
use App\Cars\Interfaces\FeedbackType;

class FeedbackEra implements FeedbackType
{
    public function feedback()
    {
        return "ЭРА - ГЛОНАСС";
    }
}