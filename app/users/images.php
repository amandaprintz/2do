<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';


//to upload an avatar-img to the avatar-folder (located in database)


if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];
    $destination =  __DIR__ . '/../database/avatars' . date("y-m-d") . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], $destination);
    $message = 'The file was successfully uploaded!';
}
