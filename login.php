<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// lidhja me klasën User dhe databazën
require_once __DIR__ . '/classes/User.php';
?>

<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login – Real Estate Insight</title>
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
<li><a href="login.php" class="active">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="about.php">Rreth Nesh</a></li>
</ul>
</nav>

<main class="container">
<h2>Hyr në Llogari</h2>

<form method="post">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Fjalëkalimi" required>
<button type="submit">Login</button>
</form>
</main>

<footer>
<p>2025 Real Estate Insight</p>
</footer>

</body>
</html>
