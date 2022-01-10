<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// If checkbox is checked -> completed (true), if not false.
$isCompleted = isset($_POST['checkbox']);

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if ($isCompleted) {

        $insertSQL = ("UPDATE tasks SET completed = true WHERE id = :id");
        $sql = $database->prepare($insertSQL);
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    } else {
        $insertSQL = ("UPDATE tasks SET completed = false WHERE id = :id");
        $sql = $database->prepare($insertSQL);
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}

redirect('/mylists.php');
