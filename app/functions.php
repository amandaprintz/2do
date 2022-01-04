<?php

declare(strict_types=1);

/* Funktion: redirecting string.  */
function redirect(string $path)
{
    header("Location: ${path}");
    exit;
}

/* Function to show the lists that's inserted in the database on
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
function fetchAllTasks(PDO $database): array
{

    $sql = $database->prepare('SELECT lists.*, tasks.* FROM tasks JOIN lists on tasks.list_id = lists.id WHERE lists.user_id = :id');
    $sql->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
    $sql->execute();

    $allTasks = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $allTasks;
}


/* "SELECT lists.*, tasks.* FROM tasks JOIN lists ON tasks.list_id = lists.id WHERE tasks.user_id = SESSION ID"
    // echo showLists($database); -->
 */
