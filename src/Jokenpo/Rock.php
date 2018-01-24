<?php

namespace DojoPuzzles\Jokenpo;

class Rock implements Hand
{
    public function winsOf(Hand $hand)
    {
        return $hand instanceof Scissors;
    }

    public function losesOf(Hand $hand)
    {
        return $hand instanceof Paper;
    }

    public function drawsWith(Hand $hand)
    {
        return $hand instanceof Rock;
    }
}