<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic:update task */
if (isset($_POST['title'], $_POST['description'], $_POST['deadline'], $_POST['id'], $_POST['list'])) {
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
    $description = trim(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
    $deadline = trim(filter_var($_POST['deadline'], FILTER_SANITIZE_STRING));
    $id = trim(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
    $list = $_POST['list'];

    $sql = $database->prepare("UPDATE tasks SET title = :title, description = :description, deadline = :deadline, list_id = :list_id WHERE id = :id");
    $sql->bindParam(':title', $title, PDO::PARAM_STR);
    $sql->bindParam(':description', $description, PDO::PARAM_STR);
    $sql->bindParam(':deadline', $deadline, PDO::PARAM_STR);
    $sql->bindParam(':list_id', $list, PDO::PARAM_INT);
    $sql->bindParam(':id', $id, PDO::PARAM_STR);


    $sql->execute();
}



redirect('/mylists.php');
