<?php
$fedorUser = password_hash('123456', PASSWORD_DEFAULT);

// Переменные для функций
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);