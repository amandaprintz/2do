<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';


/* Logic: update a task */
if (isset($_POST['title'], $_POST['id'])) {
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
    $id = trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
    $sql = $database->prepare("UPDATE lists SET title = :title WHERE id = :id");

    $sql->bindParam(':title', $title, PDO::PARAM_STR);
    $sql->bindParam(':id', $id, PDO::PARAM_STR);

    $sql->execute();
}

redirect('/mylists.php');
