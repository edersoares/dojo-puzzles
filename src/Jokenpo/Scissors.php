<?php

namespace DojoPuzzles\Jokenpo;

class Scissors implements Hand
{
    public function winsOf(Hand $hand)
    {
        return $hand instanceof Paper;
    }

    public function losesOf(Hand $hand)
    {
        return $hand instanceof Rock;
    }

    public function drawsWith(Hand $hand)
    {
        return $hand instanceof Scissors;
    }
}