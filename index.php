<?php

require_once __DIR__ . '/src/Turn.php';
require_once __DIR__ . '/src/Type.php';
require_once __DIR__ . '/src/CTurn.php';
require_once __DIR__ . '/src/ETurn.php';
require_once __DIR__ . '/src/RTurn.php';
require_once __DIR__ . '/src/OTurn.php';
require_once __DIR__ . '/src/ITurn.php';
require_once __DIR__ . '/src/TurnManager.php';

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
