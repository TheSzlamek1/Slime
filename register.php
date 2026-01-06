<?php
if($_POST){
$users = json_decode(file_get_contents('data/users.json'), true);
$users[] = [
'username'=>$_POST['username'],
'password'=>password_hash($_POST['password'], PASSWORD_DEFAULT),
'role'=>'user'
];
file_put_contents('data/users.json', json_encode($users));
header('Location: login.php');
}
?>
<form method="post">
<input name="username" placeholder="login">
<input name="password" type="password" placeholder="hasło">
<button>Rejestruj</button>
</form>
