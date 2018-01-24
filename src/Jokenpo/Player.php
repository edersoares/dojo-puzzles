<?php

namespace DojoPuzzles\Jokenpo;

class Player
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DojoPuzzles\Jokenpo\Hand
     */
    protected $hand;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return \DojoPuzzles\Jokenpo\Hand
     */
    public function getHand()
    {
        return $this->hand;
    }

    /**
     * @param \DojoPuzzles\Jokenpo\Hand $hand
     *
     * @return $this
     */
    public function chooses(Hand $hand)
    {
        $this->hand = $hand;

        return $this;
    }
}