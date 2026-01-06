<?php
session_start();
if(!isset($_SESSION['user'])) die('Brak dostępu');
?>
<h1>Panel klienta</h1>
<?php if($_SESSION['user']['role']==='admin'): ?>
<a href="admin.php">Panel admina</a>
<?php endif; ?>
<a href="logout.php">Wyloguj</a>
