<?php
session_start();
require_once '../classes/User.php';

$error = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    $data = $user->login($_POST['email'], $_POST['password']);

    if($data) {
        $_SESSION['user'] = $data;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Email ose fjalëkalim i gabuar";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Login</h2>
<p><?= $error ?></p>
<form method="post">
<input name="email" type="email" required>
<input name="password" type="password" required>
<button>Login</button>
</form>
</body>
</html>