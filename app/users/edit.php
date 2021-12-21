<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';


//to upload an avatar-img to the avatar-folder (located in database)
/*
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
}; */



if (isset($_FILES['avatar'])) {
    //saving image in filesystem
    $avatarImage = trim(filter_var($_FILES['avatar']['name'], FILTER_SANITIZE_STRING));
    $filename = date("y-m-d H-i-s") . $avatarImage;
    $destination =  __DIR__ . '/../../upload/' . $filename;
    move_uploaded_file($_FILES['avatar']['tmp_name'], $destination);
    $message = 'The file is uploaded';


    $insertSQL = ("UPDATE users SET image_url = :image_url_location WHERE id = :id");

    $sql = $database->prepare($insertSQL);

    $sql->bindParam(':image_url_location', $filename, PDO::PARAM_STR);

    $sql->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);

    $sql->execute();

    $sql = $database->prepare('SELECT * FROM users WHERE id = :id');

    $sql->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);

    $sql->execute();

    $_SESSION['user'] = $sql->fetch(PDO::FETCH_ASSOC);
}


// if (isset($message)) {
//     echo $message;
// };

redirect('/index.php');
?>

<!-- <img src="<?= $destination ?>"> -->
