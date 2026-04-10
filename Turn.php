<?php

abstract class Turn {

    private string $type;
    private int $number;
    private static int $totalTurns = 0;

    public abstract function addNewTurn(); 
}