<?php

namespace DojoPuzzles\Tests\LineBreak;

use DojoPuzzles\LineBreak\LineBreak;
use PHPUnit\Framework\TestCase;

class LineBreakTest extends TestCase
{
    /**
     * Escreva um programa em que dado uma frase e a quantidade de colunas que
     * podem ser exibidas na tela, faça a quebra de linhas sem quebrar as
     * palavras.
     *
     * Por exemplo, se passarmos a frase abaixo e pedirmos para ela ser exibida
     * em 20 colunas, teremos como resposta:
     *
     *  Entrada:
     *      Um pequeno jabuti xereta viu dez cegonhas felizes.
     *
     *  Saída:
     *      Um pequeno jabuti
     *      xereta viu dez
     *      cegonhas felizes.
     *
     * @link http://dojopuzzles.com/problemas/exibe/quebra-de-linha/
     *
     * @return void
     */
    public function testChallenge()
    {
        $lineBreak = new LineBreak();

        $text = 'Um pequeno jabuti xereta viu dez cegonhas felizes.';
        $column = 20;

        $result = $lineBreak->breakIn($text, $column);

        $expected = [
            'Um pequeno jabuti',
            'xereta viu dez',
            'cegonhas felizes.'
        ];

        $this->assertEquals($expected, $result);
    }
}