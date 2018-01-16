<?php

namespace DojoPuzzles\LineBreak;

class LineBreak
{
    public function breakIn($text, $column)
    {
        $total = strlen($text);
        $lines = [];
        $space = null;

        for ($i = 0, $j = 0; $i <= $total; $i++) {

            if ($i === $total) {
                $space = $total;
            } elseif ($text[$i] === ' ') {
                $space = $i;
            }

            if ($i === $column || $i === $total) {
                $lines[] = trim(substr($text, $j, $space - $j));
                $j = $space + 1;
                $i = $space + 1;
                $column += $space + 1;
            }
        }

        return $lines;
    }
}