<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: delete task */
if (isset($_POST['id'])) {
    $taskID = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $insertSQL = $database->prepare('DELETE FROM tasks WHERE id = :id');
    $insertSQL->bindParam(':id', $taskID, PDO::PARAM_INT);
    $insertSQL->execute();

    $insertSQL = $database->prepare('DELETE FROM tasks WHERE list_id = :id');
    $insertSQL->bindParam(':id', $taskID, PDO::PARAM_INT);
}

redirect('/mylists.php');
