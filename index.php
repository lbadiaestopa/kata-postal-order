<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/CTurn.php';
require_once __DIR__ . '/TurnGenerator.php';

/*$turn1 = new CTurn();
$turn2 = new CTurn();
$turn3 = new CTurn();

echo $turn1 . PHP_EOL;
echo $turn2 . PHP_EOL;
echo $turn3 . PHP_EOL;*/

$turn = new TurnGenerator();
$turn->newTurn();

echo $turn;