<?php

namespace DojoPuzzles\Tests\Jokenpo;

use DojoPuzzles\Jokenpo\Paper;
use DojoPuzzles\Jokenpo\Rock;
use DojoPuzzles\Jokenpo\Scissors;
use PHPUnit\Framework\TestCase;

class RockTest extends TestCase
{
    public function testWinsOf()
    {
        $rock = new Rock();
        $otherRock = new Rock();
        $paper = $this->createMock(Paper::class);
        $scissors = $this->createMock(Scissors::class);

        $resultUsingOtherRock = $rock->winsOf($otherRock);
        $resultUsingPaper = $rock->winsOf($paper);
        $resultUsingScissors = $rock->winsOf($scissors);

        $this->assertFalse($resultUsingOtherRock);
        $this->assertFalse($resultUsingPaper);
        $this->assertTrue($resultUsingScissors);
    }

    public function testLosesOf()
    {
        $rock = new Rock();
        $otherRock = new Rock();
        $paper = $this->createMock(Paper::class);
        $scissors = $this->createMock(Scissors::class);

        $resultUsingOtherRock = $rock->losesOf($otherRock);
        $resultUsingPaper = $rock->losesOf($paper);
        $resultUsingScissors = $rock->losesOf($scissors);

        $this->assertFalse($resultUsingOtherRock);
        $this->assertTrue($resultUsingPaper);
        $this->assertFalse($resultUsingScissors);
    }

    public function testDrawsWith()
    {
        $rock = new Rock();
        $otherRock = new Rock();
        $paper = $this->createMock(Paper::class);
        $scissors = $this->createMock(Scissors::class);

        $resultUsingOtherRock = $rock->drawsWith($otherRock);
        $resultUsingPaper = $rock->drawsWith($paper);
        $resultUsingScissors = $rock->drawsWith($scissors);

        $this->assertTrue($resultUsingOtherRock);
        $this->assertFalse($resultUsingPaper);
        $this->assertFalse($resultUsingScissors);
    }
}