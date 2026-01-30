<?php
require_once 'classes/User.php';
$message = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    if($user->register($_POST['name'], $_POST['email'], $_POST['password'])) {
        $message = "Regjistrimi u krye me sukses!";
    } else {
        $message = "Gabim gjatë regjistrimit";
    }
}
?>
<!DOCTYPE html>
<html lang="sq">
<head>
<link rel="stylesheet" href="style.css">
<script src="public/assets/validate.js" defer></script>
</head>
<body>
<h2>Register</h2>
<p><?= $message ?></p>
<form method="post">
<input name="name" required placeholder="Emri">
<input name="email" type="email" required placeholder="Email">
<input name="password" type="password" required placeholder="Password">
<button>Register</button>
</form>
</body>
</html>