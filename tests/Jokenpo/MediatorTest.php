<?php

namespace DojoPuzzles\Tests\Jokenpo;

use DojoPuzzles\Jokenpo\Mediator;
use DojoPuzzles\Jokenpo\Nobody;
use DojoPuzzles\Jokenpo\Paper;
use DojoPuzzles\Jokenpo\Player;
use DojoPuzzles\Jokenpo\Rock;
use DojoPuzzles\Jokenpo\Scissors;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testDrawRock()
    {
        $playerOne = new Player('Player One');
        $playerTwo = new Player('Player Two');

        $playerOne->chooses(new Rock());
        $playerTwo->chooses(new Rock());

        $mediator = new Mediator();

        $winner = $mediator->whoWins($playerOne, $playerTwo);

        $this->assertInstanceOf(Nobody::class, $winner);
    }

    public function testRockWinsScissors()
    {
        $playerOne = new Player('Player One');
        $playerTwo = new Player('Player Two');

        $playerOne->chooses(new Rock());
        $playerTwo->chooses(new Scissors());

        $mediator = new Mediator();

        $winner = $mediator->whoWins($playerOne, $playerTwo);

        $this->assertEquals($playerOne, $winner);
    }

    public function testScissorsWinsPaper()
    {
        $playerOne = new Player('Player One');
        $playerTwo = new Player('Player Two');

        $playerOne->chooses(new Paper());
        $playerTwo->chooses(new Scissors());

        $mediator = new Mediator();

        $winner = $mediator->whoWins($playerOne, $playerTwo);

        $this->assertEquals($playerTwo, $winner);
    }
}