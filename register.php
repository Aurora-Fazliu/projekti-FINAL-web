<?php
require_once __DIR__ . '/classes/User.php';
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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register – Real Estate Insight</title>
<link rel="stylesheet" href="style.css">
<script src="public/assets/validate.js" defer></script>
</head>
<body>
<header>
<img src="logo.jpg" class="logo" alt="Logo">
<h1>Real Estate Insight</h1>
</header>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="services.php">Shërbimet</a></li>
<li><a href="contact.php">Kontakt</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="register.php" class="active">Register</a></li>
<li><a href="about.php">Rreth Nesh</a></li>
</ul>
</nav>
<main class="container">
<h2>Krijo Llogari</h2>
<p><?= $message ?></p>
<form method="post" action="">
<input name="name" required placeholder="Emri">
<input name="email" type="email" required placeholder="Email">
<input name="password" type="password" required placeholder="Password">
<button type="submit">Register</button>
</form>

</main>
<footer>
<p>2025 Real Estate Insight</p>
</footer>
</body>
</html>