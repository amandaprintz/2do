<?php

declare(strict_types=1);

/* Function: redirecting string.  */
function redirect(string $path)
{
    header("Location: ${path}");
    exit;
}

/* Function: show the lists that's inserted in the database on
the actual webpage in the browser */

function showLists($database)
{
    $sql = $database->prepare("SELECT * FROM lists WHERE user_id = :id");
    $sql->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);

    $sql->execute();

    $myLists = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $myLists;
}


/* Function to show tasks */
function fetchAllTasks($database): array
{

    $sql = $database->prepare('SELECT lists.*, lists.title as listTitle, lists.id as listId, tasks.*, tasks.title as taskTitle, tasks.description as taskDescription FROM lists LEFT JOIN tasks on lists.id = tasks.list_id WHERE lists.user_id = :id');
    $sql->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
    $sql->execute();

    $allTasks = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $allTasks;
}
