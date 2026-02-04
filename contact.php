<?php
require_once 'classes/Contact.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $c = new Contact();
    if($c->save($_POST['name'], $_POST['email'], $_POST['message'])) {
        $msg = "Mesazhi u dërgua!";
    } else {
        $msg = "Gabim gjatë dërgimit të mesazhit!";
    }
}
$msg = "";
?>
<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontakt – Real Estate Insight</title>
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
<li><a href="contact.php" class="active">Kontakt</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="about.php">Rreth Nesh</a></li>
</ul>
</nav>
<main class="container">
<h2>Na Kontaktoni</h2>
<p><?= $msg ?></p>
<form method="post" onsubmit="return validateForm(this)">
<input type="text" name="name" placeholder="Emri" required>
<input type="email" name="email" placeholder="Email" required>
<textarea name="message" placeholder="Mesazhi" rows="5" required></textarea>
<button type="submit">Dërgo</button>
</form>
</main>
<footer>
<p>2025 Real Estate Insight</p>
</footer>
</body>
</html>
