<?php



// Параметры для подключения
// $db_host = "localhost";
// $db_user = "id13203941_admin"; // Логин БД
// $db_password = "DfyzDfctyrjd777@"; // Пароль БД
// $db_base = 'id13203941_customers'; // Имя БД
$db_table = "Clients"; // Имя Таблицы БД

// Параметры для подключения берем из файла
require '../connect.php';

// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
