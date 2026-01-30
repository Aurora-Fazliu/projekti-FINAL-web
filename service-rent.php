<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/classes/Property.php';

$property = new Property();
$rentProperties = $property->getAll('rent');
?>
<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pronat për Qira – Real Estate Insight</title>
<link rel="stylesheet" href="/projekti-FINAL-web/style.css">
</head>
<body>

<header>
<img src="/projekti-FINAL-web/logo.jpg" class="logo" alt="Logo">
<h1>Real Estate Insight</h1>
</header>

<nav>
<ul>
<li><a href="/projekti-FINAL-web/index.php">Home</a></li>
<li><a href="/projekti-FINAL-web/services.php" class="active">Shërbimet</a></li>
<li><a href="/projekti-FINAL-web/contact.php">Kontakt</a></li>
<li><a href="/projekti-FINAL-web/login.php">Login</a></li>
<li><a href="/projekti-FINAL-web/register.php">Register</a></li>
<li><a href="/projekti-FINAL-web/about.php">Rreth Nesh</a></li>
</ul>
</nav>

<main class="container">
<h2>Pronat për Qira</h2>

<div class="property-grid">

<?php
$images = ['foto5.jpg','foto6.jpg','foto7.jpg','foto8.jpg'];
$i = 0;

foreach($rentProperties as $p):
?>

<div class="property-card">

    <div class="image-grid">
        <img src="/projekti-FINAL-web/uploads/<?= $images[$i] ?>">
        <img src="/projekti-FINAL-web/uploads/<?= $images[$i] ?>">
        <img src="/projekti-FINAL-web/uploads/<?= $images[$i] ?>">
        <img src="/projekti-FINAL-web/uploads/<?= $images[$i] ?>">
    </div>

    <h3><?= htmlspecialchars($p['title']) ?></h3>
    <p>Çmimi: <?= htmlspecialchars($p['price']) ?> €</p>

</div>


<?php
$i++;
endforeach;
?>

</div>

<a href="/projekti-FINAL-web/services.php" class="back-button">Kthehu te Shërbimet</a>
</main>

<footer>
<p>2025 Real Estate Insight</p>
</footer>

</body>
</html>