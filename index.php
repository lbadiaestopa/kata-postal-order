<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/CTurn.php';
require_once __DIR__ . '/TurnManager.php';

$turnManager = new TurnManager();
$turnManager->newTurn();
$turnManager->newTurn();
$turnManager->newTurn();

$turnManager->callTurn();
$turnManager->callTurn();