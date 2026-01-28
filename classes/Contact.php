<?php
require_once '../classes/Contact.php';
$msg = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $c = new Contact();
    if($c->save($_POST['name'], $_POST['email'], $_POST['message'])) {
        $msg = "Mesazhi u dërgua!";
    }
}
?>
<form method="post">
<p><?= $msg ?></p>
<input name="name" required placeholder="Emri">
<input name="email" type="email" required placeholder="Email">
<textarea name="message" required placeholder="Mesazhi"></textarea>
<button>Dërgo</button>
</form>