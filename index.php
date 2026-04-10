<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/Type.php';
require_once __DIR__ . '/CTurn.php';
require_once __DIR__ . '/ETurn.php';
require_once __DIR__ . '/TurnManager.php';

$turnManager = new TurnManager();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <button type="submit" name="action" value="generateCTurn">
            Cita prèvia
        </button>
    </form>

    <form method="POST">
        <button type="submit" name="action" value="generateETurn">
            Enviament
        </button>
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        match ($_POST['action']) {
            'generateCTurn' => $turnManager->createNewTurn(Type::C),
            'generateETurn' => $turnManager->createNewTurn(Type::E),
            default => null,
        };
    }
    ?>
</body>

</html>