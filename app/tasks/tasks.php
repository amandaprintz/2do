<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

if (isset($_POST['title'], $_POST['description'], $_POST['deadline'])) {
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
    $description = trim(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
    $deadline = trim(filter_var($_POST['deadline'], FILTER_SANITIZE_STRING));


    $sql = $database->prepare("INSERT INTO tasks (title, description, deadline) VALUES (:title, :description, :deadline)");
    $sql->bindParam(':title', $title, PDO::PARAM_STR);
    $sql->bindParam(':description', $description, PDO::PARAM_STR);
    $sql->bindParam(':deadline', $deadline, PDO::PARAM_STR);


    $sql->execute();
}



redirect('/../../mylists.php');

/* fånga upp List_id från post och spara undan i databasen. */
