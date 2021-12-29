<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>



<article>
    <h1>Lists & tasks</h1>
    <p>Add your lists and tasks here</p>
    <br>

    <article>
        <h1>Create your tasks here</h1>

        </form>

        <form action="/app/tasks/tasks.php" method="post">
            <div class="mb-3">
                <label for="title">Title </label>
                <input class="form-control" type="name" name="title" id="title" placeholder="write task title here" required>
                <small class="form-text">Please fill in your task name.</small>
            </div>
            <div class="mb-3">
                <label for="tasks">Description</label>
                <input class="form-control" type="tasks" name="tasks" id="tasks" placeholder="write tasks here" required>
                <small class="form-text">Please fill in your tasks.</small>
            </div>
            <div class="mb-3">
                <label for="deadline">Deadline</label>
                <input class="form-control" type="date" name="deadline" id="deadline" placeholder="write ">
                <small class="form-text">Please fill in your tasks.</small>
            </div>
            <button type="submit" class="btn btn-info">Add new task</button>
        </form>

    </article>





    <?php require __DIR__ . '/views/footer.php'; ?>
