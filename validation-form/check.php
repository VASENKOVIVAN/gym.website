<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name  = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$path = 'uploads/' . time() . $_FILES['avatar']['name'];


if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина <br> Введите логин от 5 до 90 символов";
    exit();
} else if ($login == 'Admin') {
    echo "Вы не можете зарегистрироваться с таким логином";
    exit();
} else if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени <br> Введите имя от 2 до 50 символов";
    exit();
} else if ($name == 'admin') {
    echo "Вы не можете зарегистрироваться с таким именем";
    exit();
} else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 15) {
    echo "Недопустимая длина пароля <br> Введите пароль от 6 до 15 символов";
    exit();
}
// require 'connect';

$pass = md5($pass . "1703VeryProTecTed1930");

// Параметры для подключения
$db_host = "localhost";
$db_user = "id13203941_admin"; // Логин БД
$db_password = "DfyzDfctyrjd777@"; // Пароль БД
$db_base = 'id13203941_customers'; // Имя БД
$db_table = "Users"; // Имя Таблицы БД

// Параметры для подключения берем из файла
// require '../connect.php';

// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

$result = $mysqli->query("SELECT *  FROM `Users` WHERE `login` = '$login'");
$user = $result->fetch_assoc();
if (count($user) > 0) {
    echo "Логин занят! <br> Пользователь с таким логином уже зарегистрирован, выберите другой логин.";
    exit();
}

$mysqli->query("INSERT INTO " . $db_table . " (login, pass, name) VALUES  ('$login', '$pass', '$name')");

$mysqli->close();

header('Location: ../login.php');
