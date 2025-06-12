<?php require_once "inc/header.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User();
    $user = $user->register($_POST);
    if ($user == true) {
        print_r($user);
    } else {
        echo "failed register";
    }
}

?>

<div class="card card-dark">
    <div class="card-header bg-warning">
        <h3>Register</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
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