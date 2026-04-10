<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/Type.php';
require_once __DIR__ . '/CTurn.php';
require_once __DIR__ . '/ETurn.php';
require_once __DIR__ . '/RTurn.php';
require_once __DIR__ . '/OTurn.php';
require_once __DIR__ . '/ITurn.php';
require_once __DIR__ . '/TurnManager.php';

$turnManager = new TurnManager();
$turnManager->createNewTurn(Type::C);
$turnManager->createNewTurn(Type::E);
$turnManager->createNewTurn(Type::R);
$turnManager->createNewTurn(Type::O);
$turnManager->createNewTurn(Type::I);
$turnManager->createNewTurn(Type::C);
$turnManager->createNewTurn(Type::E);
$turnManager->createNewTurn(Type::R);

$turnManager->callTurn();
$turnManager->callTurn();
$turnManager->callTurn();
$turnManager->callTurn();
$turnManager->callTurn();
$turnManager->callTurn();
$turnManager->callTurn();
$turnManager->callTurn();
