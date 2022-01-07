<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Logic: check box to add upp in database */
$isCompleted = isset($_POST['is_completed']);

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if ($isCompleted) {
        echo "The task $id is completed.";
    } else {
        echo "The task $id is not completed.";
    }

    // This is where you update the database.
}

?>

redirect('/mylists.php');
