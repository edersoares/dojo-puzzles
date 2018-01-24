<?php

namespace DojoPuzzles\Jokenpo;

class Scissors implements Hand
{
    public function winsOf(Hand $hand)
    {
        // TODO: Implement winsOf() method.
    }

    public function losesOf(Hand $hand)
    {
        // TODO: Implement losesOf() method.
    }

    public function drawsWith(Hand $hand)
    {
        return $hand instanceof Rock;
    }
}