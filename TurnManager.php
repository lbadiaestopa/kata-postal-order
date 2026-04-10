<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/CTurn.php';

class TurnManager
{
    private array $turns = []; 

    public function createNewTurn(): void
    {
        $turn = new CTurn();
        $this->turns[] = $turn;
        echo $turn . PHP_EOL;
    }

    public function callTurn(): void 
    {
        echo $this->turns[0] . " - It's your turn" . PHP_EOL;
        $this->removeTurn();
    }

    public function removeTurn(): void
    {
        unset($this->turns[0]);
        $this->turns = array_values($this->turns);
    }
}
