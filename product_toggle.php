<?php
session_start();
$products = json_decode(file_get_contents('data/products.json'), true);
$id = $_GET['id'];
$products[$id]['active'] = !$products[$id]['active'];
file_put_contents('data/products.json', json_encode($products));
header('Location: admin.php');
