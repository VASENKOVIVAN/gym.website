<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require 'connect.php';
    $db_host = "localhost";
    $db_user = "id13203941_admin"; // Логин БД
    $db_password = "DfyzDfctyrjd777@"; // Пароль БД
    $db_base = 'id13203941_customers'; // Имя БД
    $db_table = "mytable"; // Имя Таблицы БД

    // Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

    $result = mysqli_query($mysqli, "SELECT * FROM clients");

    $row = mysqli_fetch_array($result);
    do {
        printf(
            "<p>Пользователь: " . $row['surname'] . " " . $row['name'] . "</p> 
	 <p>Отчество: " . $row['patronymic'] . "</p><p>Адрес: " . $row['address'] . "</p><p>Телефон: " . $row['tel'] . "</p>---------<br/>"
        );
    } while ($row = mysqli_fetch_array($result));
    ?>

</body>

</html>




<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Selected User</title>
</head> -->