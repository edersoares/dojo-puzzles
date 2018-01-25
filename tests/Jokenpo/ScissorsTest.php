<?php

namespace DojoPuzzles\Tests\Jokenpo;

use DojoPuzzles\Jokenpo\Paper;
use DojoPuzzles\Jokenpo\Rock;
use DojoPuzzles\Jokenpo\Scissors;
use PHPUnit\Framework\TestCase;

class ScissorsTest extends TestCase
{
    public function testWinsOf()
    {
        $scissors = new Scissors();
        $otherScissors = new Scissors();
        $rock = $this->createMock(Rock::class);
        $paper = $this->createMock(Paper::class);

        $resultUsingOtherScissors = $scissors->winsOf($otherScissors);
        $resultUsingPaper = $scissors->winsOf($paper);
        $resultUsingRock = $scissors->winsOf($rock);

        $this->assertFalse($resultUsingOtherScissors);
        $this->assertTrue($resultUsingPaper);
        $this->assertFalse($resultUsingRock);
    }

    public function testLosesOf()
    {
        $scissors = new Scissors();
        $otherScissors = new Scissors();
        $rock = $this->createMock(Rock::class);
        $paper = $this->createMock(Paper::class);

        $resultUsingOtherScissors = $scissors->losesOf($otherScissors);
        $resultUsingPaper = $scissors->losesOf($paper);
        $resultUsingRock = $scissors->losesOf($rock);

        $this->assertFalse($resultUsingOtherScissors);
        $this->assertFalse($resultUsingPaper);
        $this->assertTrue($resultUsingRock);
    }

    public function testDrawsWith()
    {
        $scissors = new Scissors();
        $otherScissors = new Scissors();
        $rock = $this->createMock(Rock::class);
        $paper = $this->createMock(Paper::class);

        $resultUsingOtherScissors = $scissors->drawsWith($otherScissors);
        $resultUsingPaper = $scissors->drawsWith($paper);
        $resultUsingRock = $scissors->drawsWith($rock);

        $this->assertTrue($resultUsingOtherScissors);
        $this->assertFalse($resultUsingPaper);
        $this->assertFalse($resultUsingRock);
    }
}