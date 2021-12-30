<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>



<article>
    <h1>Lists & tasks</h1>
    <p>Add your lists with your tasks here</p>
    <br>

    <form action="/app/tasks/addlist.php" method="post">
        <div class="mb-3">
            <label for="title"><b>Add new list</b> </label>
            <input class="form-control" type="name" name="title" id="title" placeholder="Title" required>
            <small class="form-text">Please write the name of your list.</small>
        </div>
        <button type="submit" class="btn btn-secondary">Add list</button>
    </form>
    <br>



    <?php
    $lists = showLists($database);
    foreach ($lists as $list) :
        echo $list['title'];
    endforeach;
    ?>




    <!--
    /* Exempel: Länkar samman tasks med lists
    */ // "SELECT lists.*, tasks.* FROM tasks JOIN lists ON tasks.list_id = lists.id WHERE tasks.user_id = SESSION ID"
    // echo showLists($database);



    /* <form action="/app/tasks/addtask.php" method="post">
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
            <small class="form-text">Please fill in your tasks.</small>
        </div>
        <button type="submit" class="btn btn-info">Add new task</button>
    </form> */ -->

</article>





<?php require __DIR__ . '/views/footer.php'; ?>
