<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

/* Avslutar användarens session och återgår till startsida */

unset($_SESSION['user']);

/* session_destroy(); */
redirect('/');
