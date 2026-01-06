<?php
session_start();
if($_POST){
if($_POST['email']==='admin@shop.com'){
$_SESSION['user']=['role'=>'admin','email'=>$_POST['email']];
} else {
$_SESSION['user']=['role'=>'client','email'=>$_POST['email'],'orders'=>[]];
}
header('Location: panel.php'); exit;
}
?>
<!DOCTYPE html>
<html><body>
<h2>Login</h2>
<form method="post">
<input name="email" placeholder="Email"><br>
<input type="password" placeholder="Hasło"><br>
<button>Zaloguj</button>
</form>
</body></html>