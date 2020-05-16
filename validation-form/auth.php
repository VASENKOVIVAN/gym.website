<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass . "1703VeryProTecTed1930");
$db_table = "Users"; // Имя Таблицы БД

// Параметры для подключения берем из файла
require '../connect.php';

// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);


$result = $mysqli->query("SELECT *  FROM `Users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'],  time() + 3600 * 24 * 30, "/");
setcookie('login', $user['login'],  time() + 3600 * 24 * 30, "/");
setcookie('pass', $user['pass'],  time() + 3600 * 24 * 30, "/");
setcookie('id_status', $user['id_status'],  time() + 3600 * 24 * 30, "/");

// header('Location: ../loginforuser.php');
header('Location: ../login.php');

if ($user['name'] == 'admin') {
    $mysqli->query("INSERT INTO " . $db_table . " (login, pass, name, id_status) VALUES  ('$login', '$pass', '$name', '$id_status')");
    $mysqli->close();
    header('Location: ../login.php');
} else {
    $mysqli->query("INSERT INTO " . $db_table . " (login, pass, name, id_status) VALUES  ('$login', '$pass', '$name', '$id_status')");
    $mysqli->close();
    header('Location: ../login.php');
}

// header('Location: ../loginforuser.php');
// if ($user['name'] == 'admin') {
//     $mysqli->query("INSERT INTO " . $db_table . " (login, pass, name, id_status) VALUES  ('$login', '$pass', '$name', '$id_status')");
//     $mysqli->close();
//     header('Location: ../login.php');
// } else {
//     $mysqli->query("INSERT INTO " . $db_table . " (login, pass, name, id_status) VALUES  ('$login', '$pass', '$name', '$id_status')");
//     $mysqli->close();
//     header('Location: ../loginforuser.php');
// }
