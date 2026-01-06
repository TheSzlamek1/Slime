<?php
session_start();
if(!isset($_SESSION['user'])){ header('Location: login.php'); exit; }
$user=$_SESSION['user'];
$products=json_decode(file_get_contents('products.json'),true);
?>
<!DOCTYPE html>
<html><body>
<h2>Panel użytkownika</h2>
<p>Zalogowany: <?= $user['email'] ?> (<?= $user['role'] ?>)</p>
<a href="logout.php">Wyloguj</a>
<hr>


<?php if($user['role']==='client'): ?>
<h3>Zakupione produkty</h3>
<ul>
<?php foreach($user['orders']??[] as $o): ?>
<li><?= $o ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>


<?php if($user['role']==='admin'): ?>
<h3>Zarządzanie produktami</h3>
<ul>
<?php foreach($products as $p): ?>
<li><?= $p['title'] ?> – <?= $p['price'] ?> PLN</li>
<?php endforeach; ?>
</ul>
<p>(kolejny krok: dodawanie / usuwanie / edycja)</p>
<?php endif; ?>


</body></html>