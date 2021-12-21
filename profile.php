<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<h1>Edit your profile</h1> <br>
<form action="/app/users/edit.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="avatar">Edit profile-picture</label>
        <br>
        <input type="file" accept=".jpg, .jpeg, .png" name="avatar" id="avatar" required>
        <small class="form-text"> Formats accepted: Jpg, Jpeg or Png. </small>
    </div>
    <button type="submit" class="btn btn-secondary">Change my image</button>

</form>

<?php require __DIR__ . '/views/footer.php'; ?>
