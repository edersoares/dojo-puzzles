<?php

namespace DojoPuzzles\Jokenpo;

class Mediator
{
    public function whoWins(Player $playerOne, Player $playerTwo)
    {
        $handOne = $playerOne->getHand();
        $handTwo = $playerTwo->getHand();

        if ($handOne->winsOf($handTwo)) {
            return $playerOne;
        } elseif ($handOne->losesOf($handTwo)) {
            return $playerTwo;
        } else {
            return new Nobody();
        }
    }
}