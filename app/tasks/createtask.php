<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: add new task */
if (isset($_POST['title'], $_POST['description'], $_POST['deadline'], $_POST['list_id'])) {
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
    $description = trim(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
    $deadline = trim(filter_var($_POST['deadline'], FILTER_SANITIZE_STRING));
    $id = trim(filter_var($_POST['list_id'], FILTER_SANITIZE_STRING));

    $sql = $database->prepare("INSERT INTO tasks (title, description, deadline, list_id) VALUES (:title, :description, :deadline, :list_id)");
    $sql->bindParam(':title', $title, PDO::PARAM_STR);
    $sql->bindParam(':description', $description, PDO::PARAM_STR);
    $sql->bindParam(':deadline', $deadline, PDO::PARAM_STR);
    $sql->bindParam(':list_id', $id, PDO::PARAM_STR);


    $sql->execute();
    $_SESSION['user'][] = $sql->fetchAll(PDO::FETCH_ASSOC);
}



redirect('/../../mylists.php');
