<?php

enum Type: string
{
    case C = 'C';
    case E = 'E';
    case R = 'R';
    case O = 'O';
    case I = 'I';
}

abstract class Turn {

    private Type $type;
    private int $number;
    private static int $totalTurns = 0;

    public abstract function addNewTurn(); 
}