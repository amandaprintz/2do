<?php require __DIR__ . '/../app/autoload.php'; ?>
<?php require __DIR__ . '/../views/header.php'; ?>
<?php require __DIR__ . '/../app/messages.php'; ?>

<!-- Fetch id for specific list to edit -->
<?php $id = $_GET['listId']; ?>
<?php $list = getListById($database, $id); ?>


<h1>Edit your list </h1> <br>

<!-- Form: update title of list -->

<form name="title" action="/app/lists/updatelist.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email">Update title of your chosen list</label>
        <input class="form-control" type="name" name="title" id="title" value="<?= $list['title']; ?> ">
        <small class=" form-text">Please write your new title of this list.</small>
        <input type="hidden" value="<?= $list['id'] ?>" name="id">

        <button type="submit" class="btn btn-secondary">Update list</button>
    </div>
</form>
<!-- Form: delete list-->
<form action="/app/lists/deletelist.php" method="post">
    <input type="hidden" value="<?= $list['id'] ?>" name="id" />
    <button type="submit" class="btn btn-danger">Delete your list</button>
</form>
