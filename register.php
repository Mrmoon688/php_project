<?php
require_once 'inc/init.php';

if (User::auth()) {
    Helper::redirect('index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //print_r($_POST); // $_POST['name'] // $_POST['email'] $_POST['password']
    $user = new User();
    $user = $user->register($_POST);

    if ($user == 'success') {
        //header:index.php
        Helper::redirect('index.php');
    }
}
require_once 'inc/header.php';
?>

<div class="card card-dark">
    <div class="card-header bg-warning">
        <h3>Register</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <?php
            if (isset($user) and is_array($user)) {   // $user  က ရှိလည်းရှိတယ်။  array[] လည်းဖြစ်တယ်။
                foreach ($user as $e) {
            ?>
                    <div class="alert alert-danger"><?php echo $e; ?></div>
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