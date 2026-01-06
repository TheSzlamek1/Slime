<?php
session_start();
if($_POST){
$users = json_decode(file_get_contents('data/users.json'), true);
foreach($users as $u){
if($u['username']===$_POST['username'] && password_verify($_POST['password'],$u['password'])){
$_SESSION['user']=$u;
header('Location: dashboard.php');
}
}
echo "Błędne dane";
}
?>
<form method="post">
<input name="username">
<input name="password" type="password">
<button>Zaloguj</button>
</form>
