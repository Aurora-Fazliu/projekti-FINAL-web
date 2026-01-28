<?php
session_start();
if(!isset($_SESSION['user'])) {
header("Location: login.php");
exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<body>
<h1>Dashboard</h1>
<p>Mirë se erdhe: <?= $user['name'] ?></p>
<p>Roli: <?= $user['role'] ?></p>

<?php if($user['role'] === 'admin'): ?>
<h2>ADMIN PANEL</h2>
<a href="manage-properties.php">Menaxho Pronat</a>
<a href="view-contacts.php">Shiko Kontaktet</a>
<?php endif; ?>

<a href="logout.php">Logout</a>
</body>
</html>