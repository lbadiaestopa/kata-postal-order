<?php

require_once __DIR__ . '/Turn.php';
require_once __DIR__ . '/CTurn.php';
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
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'generateCTurn') {
        $turnManager->createNewTurn();
    }
}
?>
</body>
</html>

