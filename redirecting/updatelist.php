<?php require __DIR__ . '/../app/autoload.php'; ?>
<?php require __DIR__ . '/../views/header.php'; ?>
<?php require __DIR__ . '/../app/messages.php'; ?>


<h1>Edit your chosen list</h1> <br>

<!-- Form: update title of list pic-->

<form name="title" action="/app/lists/updatelist.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email">Update title of your chosen list</label>
        <input class="form-control" type="text" name="title" id="title" placeholder="" required>
        <small class=" form-text">Please write your new title of this list.</small>
        <button type="submit" class="btn btn-secondary">Update list</button>
    </div>

</form>


<!-- Message if your updates were successful or failed -->
<?php if ($error !== '') : ?>
    <p class="error"><?= $error; ?></p>
<?php endif; ?>

<?php if ($message !== '') : ?>
    <p class="success"><?php echo $message; ?></p>
<?php endif; ?>

<?php require __DIR__ . '/../views/footer.php'; ?>
