<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>



<article>
    <h1>Lists & tasks</h1>
    <p>Add your lists with your tasks here</p>
    <br>
    <!-- Form to add a list -->
    <form action="/app/lists/createlist.php" method="post">
        <div class="mb-3">
            <label for="title">
                <h2>Add new list</h2>
            </label>
            <input class="form-control" type="name" name="title" id="title" placeholder="Title" required>
            <small class="form-text">Please write the name of your list.</small>
        </div>
        <button type="submit" class="btn btn-secondary">Add list</button>
    </form>
    <br>


    <!-- Echoing out our lists using foreach -->
    <?php
    // $lists = showLists($database);

    $fetchAllTasks = fetchAllTasks($database);
    foreach ($fetchAllTasks as $key => $task) {
        $lists[$task['listTitle']][] = [
            'listTitle' => $task['listTitle'],
            'taskTitle' => $task['taskTitle'],
            'listId' => $task['listId'],
            'taskDescription' => $task['taskDescription'],
            'taskDeadline' => $task['deadline'],
            'taskID' => $task['taskID'],
        ];
    }
    ?>



    <!-- Echoing out tasks using foreach, one to echo out them all,
     another to sort them with their lists -->
    <?php

    foreach ($lists as $title => $tasks) : ?>
        <div class="lists-box">
            <div class="list">
                <?= $title; ?>
            </div>


            <?php

            foreach ($tasks as $task) : ?>
                <ul>
                    <!--          <form action="/app/tasks/complete.php" method="POST">
                        <input type="checkbox" name="is_completed" id="is_completed" <?= $isCompleted ? 'checked' : '' ?>>

                        <label for="is_completed" -->

                    <p> <b> <?= $task['taskTitle']; ?> |</b>
                        <?= $task['taskDescription']; ?>
                        <i> <?= $task['taskDeadline']; ?>
                            <!--  </label>
                            </form> -->
                            <!-- Pen-btn redirecting to edit task page-->
                            <a href="/redirecting/updatetask.php?taskId=<?= $task['taskID']; ?>"><img src="/assets/images/edit.svg"></a>

                        </i>
                    </p>
                </ul>
            <?php
            endforeach;
            ?>

            <!-- Echoing out all tasks -->

            <div>
                <!-- Form to add task(hidden form if you haven't pressed the button below) -->

                <button class="btn btn-secondary show-form">Add a task</button>
                <!-- Btn to edit a list -->
                <button class="btn btn-secondary"> <a href="/redirecting/updatelist.php?listId=<?= $task['listId']; ?>">Edit list</button></a>
                <form action=" /../app/tasks/createtask.php" method="post" class="hidden">
                    <div class="mb-3">
                        <label for="title">Title </label>
                        <input class="form-control" type="name" name="title" id="title" placeholder="write task title here" required>
                        <small class="form-text">Please fill in a title for your task.</small>
                    </div>
                    <div class="mb-3">
                        <label for="tasks">Description</label>
                        <input class="form-control" type="description" name="description" id="description" placeholder="write task description" required>
                        <small class="form-text">Please fill in a description for your task</small>
                    </div>
                    <div class="mb-3">
                        <label for="deadline">Deadline</label>
                        <input class="form-control" type="date" name="deadline" id="deadline">
                        <small class="form-text">Please choose your deadline for your task.</small>
                    </div>

                    <input type="hidden" name="list_id" value="<?= $tasks[0]['listId']; ?>">
                    <button type="submit" class="btn btn-secondary">Save task</button>
                    <!--    <?= $tasks[0]['listId']; ?> -->
                </form>

            </div>
        </div>

    <?php endforeach;
    ?>

</article>

<?php require __DIR__ . '/views/footer.php'; ?>
