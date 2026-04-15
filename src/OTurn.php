<?php

class OTurn extends Turn {

    private string $type = 'O';
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

    private function generateNumber(): string
    {
        if (self::$totalTurns < 10) {
            return '00' . self::$totalTurns;
        }
        if (self::$totalTurns < 100) {
            return '0' . self::$totalTurns;
        }
        return self::$totalTurns;
    }

    public function __toString(): string
    {
        return $this->type . $this->number;
    }
}