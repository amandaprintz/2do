<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>



<article>
    <h1>Lists & tasks</h1>
    <p>Add your lists with your tasks here</p>
    <br>
    <!-- Form: add a list -->
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

    $fetchAllTasks = fetchAllTasks($database);
    foreach ($fetchAllTasks as $key => $task) {
        $lists[$task['listTitle']][] = [
            'listTitle' => $task['listTitle'],
            'taskTitle' => $task['taskTitle'],
            'listId' => $task['listId'],
            'taskDescription' => $task['taskDescription'],
            'taskDeadline' => $task['deadline'],
            'taskID' => $task['taskID'],
            'completed' => $task['completed'],

        ];
    }
    ?>
    <!-- Echoing out tasks using foreach, one to echo out them all,
     another to sort them with their lists -->

    <?php if (sizeof($fetchAllTasks) > 0) {
        foreach ($lists as $title => $tasks) : ?>
            <div class="lists-box">
                <div class="list">
                    <?= $title; ?>
                </div>

                <?php foreach ($tasks as $task) : ?>
                    <ul>
                        <!-- If-statement: show/hide checkbox -->
                        <?php if ($task['taskID'] !== null) {  ?>
                            <!-- Form: checkbox-->
                            <form class="tasksForm" method="post" action="/app/tasks/complete.php">
                                <label for="checkbox"></label>
                                <input type="checkbox" class="checkboxClass" name="checkbox" <?= $task['completed'] ? 'checked' : '' ?>>
                                <input type="hidden" value="<?= $task['taskID'] ?>" name="id" />
                                <button type="submit" class="hidden-submit">Hidden submit</button>
                            </form><?= "&nbsp&nbsp" ?>
                        <?php } ?>
                        <p><b> <?= $task['taskTitle']; ?></b> <?= "&nbsp&nbsp" ?>
                            <?= $task['taskDescription'];
                            "&nbsp&nbsp" ?>
                            <i> <?= $task['taskDeadline']; ?>
                                <!-- If-statement: show/ hide edit icon -->
                                <?php if ($task['taskID'] !== null) {  ?>
                                    <a href="/redirecting/updatetask.php?taskId=<?= $task['taskID']; ?>"><img src="/assets/images/edit.svg"></a>
                                <?php } ?>
                            </i>
                        </p>
                    </ul>
                <?php endforeach; ?>

                <div>
                    <!-- Form: add task(hidden form if you haven't pressed the button below) -->
                    <button class="btn btn-secondary show-form">Add a task</button>
                    <!-- Btn: edit a list -->
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
    <?php  } ?>
</article>
<?php require __DIR__ . '/views/footer.php'; ?>
