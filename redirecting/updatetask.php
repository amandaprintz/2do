<?php require __DIR__ . '/../app/autoload.php'; ?>
<?php require __DIR__ . '/../views/header.php'; ?>
<?php require __DIR__ . '/../app/messages.php'; ?>

<!-- Fetch id for specific task -->
<?php $id = $_GET['taskId']; ?>
<?php $task = getTaskById($database, $id); ?>


<h1>Edit your chosen task</h1> <br>

<!-- Form: update task -->
<!-- Title -->
<form action=" /../app/tasks/updatetask.php" method="post">
    <div class="mb-3">
        <label for="title">Title </label>
        <input class="form-control" type="name" name="title" id="title" value="<?= $task['title']; ?> ">
        <small class="form-text">Please fill in a title for your task.</small>
        <input type="hidden" value="<?= $task['id'] ?>" name="id">

    </div>
    <!-- Description -->
    <div class="mb-3">
        <label for="tasks">Description</label>
        <input class="form-control" type="description" name="description" id="description" value=" <?php echo $task['description'] ?>">
        <small class="form-text">Please fill in a description for your task</small>
    </div>


    <!-- Deadline -->
    <div class="mb-3">
        <label for="deadline">Deadline</label>
        <input class="form-control" type="date" name="deadline" value="<?= $task['deadline']; ?>" id="deadline">
        <small class="form-text">Please choose your deadline for your task.</small>
        <br>
        <button name="task" type="submit" class="btn btn-secondary">Save changes</button>
    </div>
</form>

<!-- Form: delete task -->
<form action="/app/tasks/deletetask.php" method="post">
    <input type="hidden" value="<?= $task['id'] ?>" name="id" />
    <button type="submit" class="btn btn-danger">Delete your task</button>
</form>
