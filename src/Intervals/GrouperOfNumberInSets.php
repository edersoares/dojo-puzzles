<?php

namespace DojoPuzzles\Intervals;

class GrouperOfNumberInSets
{
    public function group($numbers)
    {
        $numbers = explode(',', $numbers);
        $numbers = array_map('trim', $numbers);
        $index = $current = array_shift($numbers);
        $groups = [$current => null];

        foreach ($numbers as $number) {

            if ($current - $number == -1) {
                $current = $number;
            } else {
                $groups[$index] = $current;
                $groups[$number] = null;
                $index = $current = $number;
            }
        }

        $groups[$index] = $current;
        $numbers = [];

        foreach ($groups as $first => $last) {
            if ($first == $last) {
                $numbers[] = "[{$first}]";
            } else {
                $numbers[] = "[{$first}-{$last}]";
            }
        }

        return implode(', ', $numbers);
    }
}
