<?php
session_start();
if($_SESSION['user']['role']!=='admin') die();
if($_POST){
$products = json_decode(file_get_contents('data/products.json'), true);
$products[]=[
'name'=>$_POST['name'],
'description'=>$_POST['desc'],
'price'=>$_POST['price'],
'quantity'=>$_POST['qty'],
'active'=>1
];
file_put_contents('data/products.json', json_encode($products));
header('Location: admin.php');
}
?>
<form method="post">
<input name="name">
<textarea name="desc"></textarea>
<input name="price">
<input name="qty">
<button>Dodaj</button>
</form>
