<?php
session_start();
if($_SESSION['user']['role']!=='admin') die('Brak dostępu');
$products = json_decode(file_get_contents('data/products.json'), true);
?>
<h1>Admin – produkty</h1>
<a href="product_add.php">Dodaj produkt</a>
<?php foreach($products as $id=>$p): ?>
<div>
<?= $p['name'] ?> | <?= $p['price'] ?> PLN | <?= $p['active']?'AKTYWNY':'OFF' ?>
<a href="product_toggle.php?id=<?=$id?>">ON/OFF</a>
</div>
<?php endforeach; ?>
