<?php

namespace DojoPuzzles\Tests\Jokenpo;

use DojoPuzzles\Jokenpo\Paper;
use DojoPuzzles\Jokenpo\Rock;
use DojoPuzzles\Jokenpo\Scissors;
use PHPUnit\Framework\TestCase;

class PaperTest extends TestCase
{
    public function testWinsOf()
    {
        $paper = new Paper();
        $otherPaper = new Paper();
        $rock = $this->createMock(Rock::class);
        $scissors = $this->createMock(Scissors::class);

        $resultUsingOtherPaper = $paper->winsOf($otherPaper);
        $resultUsingRock = $paper->winsOf($rock);
        $resultUsingScissors = $paper->winsOf($scissors);

        $this->assertFalse($resultUsingOtherPaper);
        $this->assertTrue($resultUsingRock);
        $this->assertFalse($resultUsingScissors);
    }

    public function testLosesOf()
    {
        $paper = new Paper();
        $otherPaper = new Paper();
        $rock = $this->createMock(Rock::class);
        $scissors = $this->createMock(Scissors::class);

        $resultUsingOtherPaper = $paper->losesOf($otherPaper);
        $resultUsingRock = $paper->losesOf($rock);
        $resultUsingScissors = $paper->losesOf($scissors);

        $this->assertFalse($resultUsingOtherPaper);
        $this->assertFalse($resultUsingRock);
        $this->assertTrue($resultUsingScissors);
    }

    public function testDrawsWith()
    {
        $paper = new Paper();
        $otherPaper = new Paper();
        $rock = $this->createMock(Rock::class);
        $scissors = $this->createMock(Scissors::class);

        $resultUsingOtherPaper = $paper->drawsWith($otherPaper);
        $resultUsingRock = $paper->drawsWith($rock);
        $resultUsingScissors = $paper->drawsWith($scissors);

        $this->assertTrue($resultUsingOtherPaper);
        $this->assertFalse($resultUsingRock);
        $this->assertFalse($resultUsingScissors);
    }
}