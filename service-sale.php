<?php
require_once '../classes/Property.php';
$property = new Property();
$saleProperties = $property->getAll('sale');
?>
<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pronat për Shitje – Real Estate Insight</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header>
<img src="logo.jpg" class="logo" alt="Logo">
<h1>Real Estate Insight</h1>
</header>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="services.php" class="active">Shërbimet</a></li>
<li><a href="contact.php">Kontakt</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="about.php">Rreth Nesh</a></li>
</ul>
</nav>
<main class="container">
<h2>Pronat për Shitje</h2>
<div class="property-grid">
<?php foreach($saleProperties as $p): ?>
<div class="property-card">
<img src="uploads/<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
<h3><?= htmlspecialchars($p['title']) ?></h3>
<p><?= htmlspecialchars($p['price']) ?></p>
</div>
<?php endforeach; ?>
</div>
<a href="services.php" class="back-button">Kthehu te Shërbimet</a>
</main>
<footer>
<p>2025 Real Estate Insight</p>
</footer>
</body>
</html>


