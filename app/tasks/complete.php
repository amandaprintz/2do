<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: check box to add upp in database */
/* -- NOT DONE */

if (isset($_POST['checkbox'])) {
    $checkbox = 1;
    var_dump($checkbox);
    $id = $_POST['id'];
    $query = ("UPDATE tasks SET completed = :completed WHERE id = :id");
    $statement = $database->prepare($query);
    $statement->bindParam(':completed', $checkbox, PDO::PARAM_INT);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
} else {
    $checkbox = 0;
    $id = $_POST['id'];
    var_dump($checkbox);
    $query = ("UPDATE tasks SET completed = :completed WHERE id = :id");
    $statement = $database->prepare($query);
    $statement->bindParam(':completed', $checkbox, PDO::PARAM_INT);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
}


redirect('/mylists.php');