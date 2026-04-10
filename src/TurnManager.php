<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/Type.php';
require_once __DIR__ . '/CTurn.php';
require_once __DIR__ . '/ETurn.php';


class TurnManager
{
    private array $turns = [];

    public function createNewTurn(Type $type): void
{
    $turn = match ($type) {
        Type::C => new CTurn(),
        Type::E => new ETurn(),
        Type::R => new RTurn(),
        Type::O => new OTurn(),
        Type::I => new ITurn(),
    };

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
