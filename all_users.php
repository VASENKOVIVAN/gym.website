<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--title-->
    <title>Панель управления Фитнес-клуба</title>
    <link rel="icon" href="img/iconka.png">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="css/styles.css">
    <!--admin css-->
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <section class="adm">
        <div style=" height: 100vh;" class="row colss">
            <div style="background: #c4d114; width: 100vh;" class="col-md-3">
                <div class="navi-logo">
                    <img style="width: 250px;" src="img/logo-admin.png" alt="Логотип фитнес-клуб">
                </div>
                <div class="navi">
                    <a href="index.html">Сайт Фитнес-клуба</a>
                    <a href="admin-main.html">Главная</a>
                    <a href="admin-add-clients.html">Добавление клиентов</a>
                    <a href="all_users.php">Таблица "Клиенты"</a>
                    <a href="#">Скоро</a>
                    <a href="#">Скоро</a>
                    <a href="#">Скоро</a>
                </div>
            </div>
            <div class="col-md-9 main-text">
                <div id="bluelinetop" class="text-top" style="background: #8dd0d3; height: 60px;">
                    <h3>Панель управления</h3>
                </div>
                <div class="admin-right">
                    <h1>Список клиентов</h1>
                    <table border="2" style="border:2 #8a8a8a;">
                        <tr>
                            <td>Фамилия</td>
                            <td>Имя</td>
                            <td>Отчество</td>
                            <td>Адрес</td>
                            <td>Телефон</td>
                            <td>Редактировать</td>
                            <td>Удалить</td>
                        </tr>

                        <?php
                        require 'connect.php';
                        $rows = mysqli_query($mysqli, "SELECT surname, name, patronymic, address, tel FROM `clients`");
                        while ($stroka = mysqli_fetch_array($rows)) {

                            echo "<tr>";
                            echo "<td>" . $stroka['surname'] . "</td>";
                            echo "<td>" . $stroka['name'] . "</td>";
                            echo "<td>" . $stroka['patronymic'] . "</td>";
                            echo "<td>" . $stroka['address'] . "</td>";
                            echo "<td>" . $stroka['tel'] . "</td>";
                            echo "<td><a href='edit.php?nomer=" . $stroka['nomer'] . "'>Редактировать</a></td>";
                            echo "<td><a href='delete.php?nomer=" . $stroka['nomer'] . "'>Удалить</a></td>";
                            echo "</tr>";
                        }
                        ?>

                        <!-- <form method="post" action="all_users.php">
                            <input id="submit" type="submit" value="Вывести всех пользователей"><br />
                        </form> -->


                    </table>
                </div>
            </div>
        </div>
    </section>


    <!--============= 04. services-card =============-->

    <!--  -->

</body>

</html>
<!-- =============  =============-->
<script src="/js/jquery-3.4.0.min.js"></script>
<script>
    // Отправка данных на сервер
    $('#form').trigger('reset');
    $(function() {
        'use strict';
        $('#form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: 'admin-add-clients.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(this),
            });
            alert('Новый клиент добавлен в Базу Данных\n\Данные высланы на почту: swayket@yandex.ru');
            $('#form').trigger('reset'); // очистка формы
        });
    });
</script>






<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->
<!-- Вот этот выводит списком -->
<?php
// require 'connect.php';
// $db_host = "localhost";
// $db_user = "id13203941_admin"; // Логин БД
// $db_password = "DfyzDfctyrjd777@"; // Пароль БД
// $db_base = 'id13203941_customers'; // Имя БД
// $db_table = "mytable"; // Имя Таблицы БД
// Подключение к базе данных
// $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
// $result = mysqli_query($mysqli, "SELECT * FROM clients");
// $row = mysqli_fetch_array($result);
// do {
// printf(
// "<p>Пользователь: " . $row['surname'] . " " . $row['name'] . "</p> 
//  <p>Отчество: " . $row['patronymic'] . "</p><p>Адрес: " . $row['address'] . "</p><p>Телефон: " . $row['tel'] . "</p>---------<br/>"
// );
// } while ($row = mysqli_fetch_array($result));
// 
?>
<!-- вввввввввввввввввввввввввввввввввввввввввввввввввв -->

<!-- <h1>Список клиентов</h1>
    <table border="2" style="border:2 #8a8a8a;">
        <tr>
            <td>Фамилия</td>
            <td>Имя</td>
            <td>Отчество</td>
            <td>Адрес</td>
            <td>Телефон</td>
            <td>Редактировать</td>
            <td>Удалить</td>
        </tr>

        <?php
        // require 'connect.php';
        // $rows = mysqli_query($mysqli, "SELECT surname, name, patronymic, address, tel FROM `clients`");
        // while ($stroka = mysqli_fetch_array($rows)) {

        //     echo "<tr>";
        //     echo "<td>" . $stroka['surname'] . "</td>";
        //     echo "<td>" . $stroka['name'] . "</td>";
        //     echo "<td>" . $stroka['patronymic'] . "</td>";
        //     echo "<td>" . $stroka['address'] . "</td>";
        //     echo "<td>" . $stroka['tel'] . "</td>";
        //     echo "<td><a href='edit.php?nomer=" . $stroka['nomer'] . "'>Редактировать</a></td>";
        //     echo "<td><a href='delete.php?nomer=" . $stroka['nomer'] . "'>Удалить</a></td>";
        //     echo "</tr>";
        // }
        ?>



    </table>


</body>

</html> -->




<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Selected User</title>
</head> -->