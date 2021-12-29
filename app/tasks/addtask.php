

<?php

declare(strict_types=1);

/* Started logic for creating a task */


/*
if (isset($_POST['title'], $_POST['description'], $_POST['deadline'])) {
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
    $deadline = trim(filter_var($_POST['deadline'], FILTER_SANITIZE_STRING));
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));


    $sql = $database->prepare("INSERT INTO tasks (title, description, deadline) VALUES (:title, :description, :deadline)");
    $sql->bindParam(':title', $title, PDO::PARAM_STR);
    $sql->bindParam(':description', $task, PDO::PARAM_STR);
    $sql->bindParam(':deadline', $deadline, PDO::PARAM_STR);

    $sql->execute();

    $_SESSION['user'] = $sql->fetch(PDO::FETCH_ASSOC);
}



redirect('/../../tasks.php');
 */
