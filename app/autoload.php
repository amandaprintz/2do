<?php

declare(strict_types=1);

/* Starting sessions */
session_start();

/* Default timezone to coordinated universal time. */
date_default_timezone_set('UTC');

// Set the default character encoding to UTF-8.
mb_internal_encoding('UTF-8');

// Include the helper functions.
require __DIR__ . '/functions.php';

/* Fetchar the global configuration array. */
$config = require __DIR__ . '/config.php';

/* Skapar database connection. */
$database = new PDO($config['database_path']);
