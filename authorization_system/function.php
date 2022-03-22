<?php

// пусть возвращает массив всех пользователей и хэшей их паролей
function getUsersList() {
	$users = [
	'Федор' => '$2y$10$5JPdetidi0P325Qfhx3GZ.gdmPX1d4C88BgdDbDyt1a/TmJtiK1nW', // пароль 123456
	];
	return $users;
}

// проверяет - существует ли пользователь с заданным логином?
function existsUser($login) {
	if(isset($users[$_POST['login']])) {
    echo 'Пользователь найден';
	} else {
		echo 'Логин не найден';
	}
}

// пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function сheckPassword($login, $password) {
	if(password_verify($_POST['password'], $users[$_POST['login']])) { // передаем то что ввел юзер в пароль и тот хеш который мы храним 
    	return true;
    }
}