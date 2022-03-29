<?php
include __DIR__ . '/variables.php';

// пусть возвращает массив всех пользователей и хэшей их паролей
function getUsersList() {
	return [
	'Федор' => '$2y$10$5JPdetidi0P325Qfhx3GZ.gdmPX1d4C88BgdDbDyt1a/TmJtiK1nW', // пароль 123456, если $fedorUser из send.php в value добавить, то же самое будет, что и прямая вставка?
	];
}

// проверяет - существует ли пользователь с заданным логином?
function existsUser($login) {
	return array_key_exists($login, getUsersList());
}

//возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function сheckPassword($login, $password) {
	if(false != existsUser($login) && password_verify($password, getUsersList()[$login])) {
		return true;
	}
}

//возвращает либо имя вошедшего на сайт пользователя, либо null
// весь код не верный ибо я не знаю что творю, но прикладываю свои пыпытки

function getCurrentUser() {
    if(isset($_SESSION['user'])) {
        return $_SESSION['user'];
    } else {
        return null;
    }
}