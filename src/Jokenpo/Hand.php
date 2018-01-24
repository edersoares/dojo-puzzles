<?php

namespace DojoPuzzles\Jokenpo;

interface Hand
{
    public function winsOf(Hand $hand);

    public function losesOf(Hand $hand);

    public function drawsWith(Hand $hand);
}