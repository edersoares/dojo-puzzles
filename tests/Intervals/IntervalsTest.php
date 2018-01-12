<?php

namespace DojoPuzzles\Tests\Intervals;

use DojoPuzzles\Intervals\GrouperOfNumberInSets;
use PHPUnit\Framework\TestCase;

class IntervalsTest extends TestCase
{
    /**
     * Dado uma lista de números inteiros, agrupe a lista em um conjunto de intervalos
     *
     * Exemplo:
     *  Entrada: 100, 101, 102, 103, 104, 105, 110, 111, 113, 114, 115, 150
     *  Saída:   [100-105], [110-111], [113-115], [150]
     *
     * @link http://dojopuzzles.com/problemas/exibe/intervalos/
     *
     * @return void
     */
    public function testChallenge()
    {
        $grouper = new GrouperOfNumberInSets();

        $result = $grouper->group('100, 101, 102, 103, 104, 105, 110, 111, 113, 114, 115, 150');

        $expected = '[100-105], [110-111], [113-115], [150]';

        $this->assertEquals($expected, $result);
    }
}