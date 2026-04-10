<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/CTurn.php';
require_once __DIR__ . '/TurnManager.php';

$turnManager = new TurnManager();
$turnManager->createNewTurn();
$turnManager->createNewTurn();
$turnManager->createNewTurn();

$turnManager->callTurn();
$turnManager->callTurn();