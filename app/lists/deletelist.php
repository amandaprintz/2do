<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: delete a list */

if (isset($_POST['id'])) {
    $listId = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $sql = $database->prepare('DELETE FROM lists WHERE id = :id;');
    $sql->bindParam(':id', $listId, PDO::PARAM_INT);
    $sql->execute();

    $sql = $database->prepare('DELETE FROM tasks WHERE list_id = :id;');
    $sql->bindParam(':id', $listId, PDO::PARAM_INT);
    $sql->execute();
}

redirect('/mylists.php');
