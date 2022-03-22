<?php
include __DIR__ . '/function.php';

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Вход</title>
</head>
<body>
<form action="/sprint_f/lesson_5/authorization_system/send.php" method="post" enctype="multipart/form-data"> 
Логин: <input type="text" name="login">
Пароль: <input type="password" name="password">
<button type="submit">Войти</button>
</body>
</html>