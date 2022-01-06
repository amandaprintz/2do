<?php require __DIR__ . '/../app/autoload.php'; ?>
<?php require __DIR__ . '/../views/header.php'; ?>
<?php require __DIR__ . '/../app/messages.php'; ?>


<h1>Edit your chosen task</h1> <br>

<!-- Form: update task -->

<form action=" /../app/tasks/updatetask.php" method="post">
    <div class="mb-3">
        <label for="title">Title </label>
        <input class="form-control" type="name" name="title" id="title" placeholder="write new task title here" required>
        <small class="form-text">Please fill in a title for your task.</small>
        <button name="title" type="submit" class="btn btn-secondary">Change my title</button>

    </div>
    <div class="mb-3">
        <label for="tasks">Description</label>
        <input class="form-control" type="description" name="description" id="description" placeholder="write task description" required>
        <small class="form-text">Please fill in a description for your task</small>
        <button name="description" type="submit" class="btn btn-secondary">Change my description</button>

    </div>
    <div class="mb-3">
        <label for="deadline">Deadline</label>
        <input class="form-control" type="date" name="deadline" id="deadline">
        <small class="form-text">Please choose your deadline for your task.</small>
        <button name="deadline" type="submit" class="btn btn-secondary">Change my deadline</button>
    </div>
</form>

<!-- Form: delete task -->
<form action="/app/tasks/deletetask.php" method="post">
    <input type="hidden" value="<?= $listItem['id'] ?>" name="id" />
    <button type="submit" class="btn btn-danger">Delete your task</button>
</form>



<!-- Message if your updates were successful or failed -->
<?php if ($error !== '') : ?>
    <p class="error"><?= $error; ?></p>
<?php endif; ?>

<?php if ($message !== '') : ?>
    <p class="success"><?php echo $message; ?></p>
<?php endif; ?>

<?php require __DIR__ . '/../views/footer.php'; ?>
