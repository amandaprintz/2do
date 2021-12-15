<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>


<article>
    <h1>Create an account</h1> <br>

    <div class="mb-3">
        <label for="email">Username</label>
        <input class="form-control" type="name" name="name" id="name" placeholder="" required>
        <small class="form-text">Choose your username.</small>
    </div>
    <form action="app/users/register.php" method="post">
        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="" required>
            <small class="form-text">Register your email address.</small>
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" required>
            <small class="form-text"> Choose your password.</small>
        </div>



        <div class="mb-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" required>
            <small class="form-text"> Choose your password.</small>
        </div>

    </form>
    <br>

    <form action="/" method="post" enctype="multipart/form-data">

        <div>
            <label for="avatar">Choose your avatar image to upload</label> <br>
            <input type="file" accept=".jpg, .jpeg, .png" name="avatar" id="avatar" required>
        </div>


        <br>
        <form method="get" action="/signup.php">
            <button type="submit" class="btn btn-secondary">Create an account</button>
        </form>

</article>





</body>

</html>

<?php require __DIR__ . '/views/footer.php'; ?>
