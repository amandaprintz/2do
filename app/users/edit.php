<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';


//to upload an avatar-img to the avatar-folder (located in database)

if (isset($_FILES['avatar'])) {
    $image = $_FILES['avatar'];
    $destination = __DIR__ . '../../uploads/' . date("y-m-d") . $image['name'];
    move_uploaded_file($image['tmp_name'], $destination);
}

if (isset($_FILES['image_url'])) {
    $image = trim(filter_var($_FILES['image_url'], FILTER_SANITIZE_STRING));
    $insertSQL = ("INSERT INTO users ('image_url') VALUES (:profile_image)");
    $sql = $database->prepare($insertSQL);

    $sql->bindParam(':profile_image', $image, PDO::PARAM_STR);

    $sql->execute();
};
