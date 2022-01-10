<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Finishing the users session and returns to the home page.*/

unset($_SESSION['user']);

/* session_destroy(); */

redirect('/');
