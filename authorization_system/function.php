<?php

// пусть возвращает массив всех пользователей и хэшей их паролей
function getUsersList() {
	return = [
	'Федор' => '$2y$10$5JPdetidi0P325Qfhx3GZ.gdmPX1d4C88BgdDbDyt1a/TmJtiK1nW', // пароль 123456
	];
}

// проверяет - существует ли пользователь с заданным логином?
$login = $_POST['login'];
function existsUser($login) {
	$listUsers = getUsersList();
	$login = isset($listUsers[$login]));  
}

