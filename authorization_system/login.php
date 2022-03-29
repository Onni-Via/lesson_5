<?php
session_start();
include __DIR__ . '/function.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



// ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу
if(null !== getCurrentUser()) {
	header('Location: http://localhost/sprint_f/lesson_5/authorization_system/index.php');
} else {
	
// ЕСЛИ пользователь не вошел - отображает форму входа
?>
	<form action="/sprint_f/lesson_5/authorization_system/login.php" method="post" enctype="multipart/form-data"> 
		Логин: <input type="text" name="login">
		Пароль: <input type="password" name="password">
		<button type="submit">Войти</button>
	</form>
<?php
} 

// ЕСЛИ введены данные в форму входа - проверяем им (см. пункт 1.3) и ЕСЛИ проверка прошла, ТО запоминаем информацию о вошедшем пользователе
if (isset($login) && isset($password)) {
	if(true == сheckPassword($login, $password)) {
		$login = $_SESSION['user'];
	}
}

var_dump($_SESSION);	
var_dump($_POST);