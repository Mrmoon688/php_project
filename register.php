<?php require_once "inc/header.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newUser = new User();
    $user = $newUser->register($_POST);
    if ($user == 'success') {
        echo "success";
    }
}

?>

<div class="card card-dark">
    <div class="card-header bg-warning">
        <h3>Register</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <?php
            if (isset($user) and is_array($user)) {
                foreach ($user as $error) {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
            <?php
                }
            }
            ?>
            <div class="form-group">
                <label for="" class="text-white">Enter Username</label>
                <input type="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="text-white">Enter Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="text-white">Enter Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" value="Register" class="btn btn-outline-warning">
        </form>
    </div>
</div>
<?php require_once "inc/footer.php"; ?>