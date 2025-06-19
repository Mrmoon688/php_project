<?php
require_once 'inc/init.php';
if (User::auth()) {
    Helper::redirect('index.php');
} ?>

<div class="card card-dark">
    <div class="card-header bg-warning">
        <h3>Login</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="" class="text-white">Enter Username</label>
                <input type="name" class="form-control" placeholder="enter surname">
            </div>
            <div class="form-group">
                <label for="" class="text-white">Enter Password</label>
                <input type="password" class="form-control" placeholder="Enter password">
            </div>
            <input type="submit" value="Login" class="btn btn-outline-warning">
        </form>
    </div>
</div>
<?php require_once "inc/footer.php"; ?>