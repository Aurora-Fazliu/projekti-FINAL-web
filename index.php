<?php
require_once '../classes/Property.php';
$property = new Property();
$latestProperties = $property->getAll();
?>
<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home - Real Estate Insight</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header>
<img src="logo.jpg" class="logo" alt="Logo">
<h1>Real Estate Insight</h1>
</header>
<nav>
<ul>
<li><a href="index.php" class="active">Home</a></li>
<li><a href="services.php">Shërbimet</a></li>
<li><a href="contact.php">Kontakt</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="about.php">Rreth Nesh</a></li>
</ul>
</nav>
<main class="container">
<h2>Mirësevini në Real Estate Insight</h2>
<p>Këtu mund të gjeni ofertat më të mira të pronave dhe të njihni shërbimet tona profesionale.</p>

<div class="property-grid">
<?php foreach($latestProperties as $p): ?>
<div class="property-card">
<img src="uploads/<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
<h3><?= htmlspecialchars($p['title']) ?></h3>
<p><?= htmlspecialchars($p['price']) ?></p>
</div>
<?php endforeach; ?>
</div>

<a href="register.php" class="main-button">Krijo Llogarinë</a>
</main>
<footer>
<p>2025 Real Estate Insight</p>
</footer>
</body>
</html>