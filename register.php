<?php
if($_POST){
$users = json_decode(file_get_contents('data/users.json'), true);
$users[] = [
'login'=>$_POST['login'],
'pass'=>password_hash($_POST['pass'], PASSWORD_DEFAULT),
'role'=>$_POST['role'],
'balance'=>0
];
file_put_contents('data/users.json', json_encode($users));
header('Location: login.php');
}
?>
<style>body{background:#111;color:#eee}</style>
<form method="post">
<input name="login" placeholder="login"><br>
<input name="pass" type="password" placeholder="hasło"><br>
<select name="role">
<option value="buyer">Kupujący</option>
<option value="seller">Sprzedawca</option>
</select><br>
<button>Rejestruj</button>
</form>
