<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// Om checkbox finns (är ibockad) sätter jag iscompleted. Is completed innehåller ett true/false beroende på om den är ibockad eller ej.
$isCompleted = isset($_POST['checkbox']);

// POST[id] är id-numret på tasken.
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // om checkboxen är ibockad, så uppdateras completed i databasen till true, kopplat till rätt task-id.
    if ($isCompleted) {

        $insertSQL = ("UPDATE tasks SET completed = true WHERE id = :id");

        $sql = $database->prepare($insertSQL);

        $sql->bindParam(':id', $id, PDO::PARAM_INT);

        $sql->execute();
    }

    // annars uppdateras completed till false.
    else {
        $insertSQL = ("UPDATE tasks SET completed = false WHERE id = :id");

        $sql = $database->prepare($insertSQL);

        $sql->bindParam(':id', $id, PDO::PARAM_INT);

        $sql->execute();
    }
}

redirect('/mylists.php');
