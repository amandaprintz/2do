<?php

declare(strict_types=1);

/* Started logic for creating a task */



if (isset($_POST['title'], $_POST['description'], $_POST['deadline']))
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$deadline = trim(filter_var($_POST['deadline'], FILTER_SANITIZE_STRING));
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));



redirect('/../../tasks.php');
