<?php
session_start();
include __DIR__ . '/function.php';

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Личный кабинет</title>
</head>
<body>
<?php 
if (null !== getCurrentUser()) {
  echo 'Привет ' . getCurrentUser();
}
?>
</body>
</html>