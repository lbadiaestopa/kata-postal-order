<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/CTurn.php';

class TurnGenerator
{

    public function newTurn(): void
    {
        $turn = new CTurn();
    }

    public function __toString()
    {
        return $this->newTurn();
    }
}
