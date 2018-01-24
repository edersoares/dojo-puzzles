<?php

namespace DojoPuzzles\Jokenpo;

class Paper implements Hand
{
    public function winsOf(Hand $hand)
    {
        return $hand instanceof Rock;
    }

    public function losesOf(Hand $hand)
    {
        return $hand instanceof Scissors;
    }

    public function drawsWith(Hand $hand)
    {
        return $hand instanceof Paper;
    }
}