<?php

namespace App\Cars\Behaviors\Feedbacks;
use App\Cars\Interfaces\FeedbackType;

class FeedbackeCall implements FeedbackType
{
    public function feedback()
    {
        return "USA eCall";
    }
}