<?php

class CTurn extends Turn {

    private Type $type = TYPE::C;
    private int $number = 0;
    private static int $totalTurns = 0;

    public function __construct()
    {
        $this->addNewTurn();
        $this->number = self::$totalTurns;
    }

    public function addNewTurn()
    {
        self::$totalTurns++;
    }

    public function __toString(): string
    {
        return $this->type->value . $this->number;
    }
}