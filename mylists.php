<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>



<article>
    <h1>Lists & tasks</h1>
    <p>Add your lists with your tasks here</p>
    <br>

    <form action="/app/tasks/addlist.php" method="post">
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



    <?php
    $lists = showLists($database);

    foreach ($lists as $list) :
        $list['title']; ?>
        <form>
            <div class="lists-box">
                <p class=“list”>
                <h2><?php echo $list['title'] ?></h2>
                </p>

        </form>

        <!-- In progress: click to show form
        <button class="btn btn-secondary" onclick="showForm(formElement)">Show the form</button>
        <form id="formElement" style="display: none;"> -->

        <form action="/app/tasks/tasks.php" method="post">
            <div class="mb-3">
                <label for="title">Title </label>
                <input class="form-control" type="name" name="title" id="title" placeholder="write task title here" required>
                <small class="form-text">Please fill in your task name.</small>
            </div>
            <div class="description-form">
                <label for="tasks">Description</label>
                <input class="form-control" type="description" name="description" id="description" placeholder="write task description" required>
                <small class="form-text">Please fill in your tasks.</small>
            </div>
            <div class="mb-3">
                <label for="deadline">Deadline</label>
                <input class="form-control" type="date" name="deadline" id="deadline" placeholder="write ">
                <small class="form-text">Please choose your deadline for your task.</small>
            </div>
            <button type="submit" class="btn btn-secondary">Save</button>

        </form>
        </form>
        </div>

    <?php endforeach;
    ?>
    </div>

    <!--
  Exempel: Länkar samman tasks med lists
    */ // "SELECT lists.*, tasks.* FROM tasks JOIN lists ON tasks.list_id = lists.id WHERE tasks.user_id = SESSION ID"
    // echo showLists($database);




<?php require __DIR__ . '/views/footer.php'; ?>
