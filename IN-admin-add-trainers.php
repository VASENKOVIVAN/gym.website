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
                    <a href="index.php">Сайт Фитнес-клуба</a>
                    <a href="admin-main.html">Главная</a>
                    <a href="all_request.php">Заявки с сайта</a>
                    <a href="IN-admin-add-clients.php">Добавление клиентов</a>
                    <a href="IN-admin-add-trainers.php" style="color: white;">Добавление тренеров</a>
                    <a href="admin-add-sports.html">Добавление видов спорта</a>
                    <a href="admin-add-subscriptions.html">Добавление абонементов</a>
                    <a href="all_users.php">Таблица "Клиенты"</a>
                    <a href="all_trainers.php">Таблица "Тренеры"</a>
                    <a href="all_sports.php">Таблица "Виды спорта"</a>
                    <a href="all_subscriptions.php">Таблица "Абонементы"</a>
                    <!-- <a href="#">Скоро</a> -->
                    <!-- <a href="#">Скоро</a> -->
                    <a style="background: #d13a14; color: #fff;width: 80%;display: block;text-align: center;font-weight: 600;font-size: 1.1em;text-decoration: none;border: 2px solid #c4d114;border-radius: 10px; margin-top: 15px;" href="/exit.php">Выйти</a>
                    <!-- <a href="/exit.php" style="font-weight: 900; font-size: 27px;">ВЫЙТИ</a> -->
                </div>
            </div>
            <div class="col-md-9 main-text">
                <div id="bluelinetop" class="text-top" style="background: #8dd0d3; height: 60px;">
                    <h3>Панель управления</h3>
                </div>
                <div class="admin-right">
                    <h1>Добавить тренера</h1>

                    <form action="admin-add-trainers.php" method="POST" id="form" class="add-client-form">

                        <div class="formfactor">
                            <p>Фамилия:</p>
                            <input style="text-transform: capitalize;" type="text" name="surname" placeholder="Васенков" required></input>
                        </div>

                        <div class="formfactor">
                            <p>Имя:</p>
                            <input style="text-transform: capitalize;" type="text" name="name" placeholder="Иван"></input>
                        </div>

                        <div class="formfactor">
                            <p>Отчество:</p>
                            <input style="text-transform: capitalize;" type="text" name="patronymic" placeholder="Викторович"></input>
                        </div>
                        <div>

                        </div>
                        <!-- <div class="formfactor">
                            <p>Вид спорта:</p>
                            <input type="text" name="sport" placeholder="Йога">
                        </div> -->
                        <div>
                            <p>Вид спорта:</p>
                            <?php
                            /*Соединяеся с базой и делаем выборку из таблицы*/
                            require 'connect.php';
                            // Подключение к базе данных
                            $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
                            $sql = "SELECT * FROM Sports";
                            $result_select = mysqli_query($mysqli, $sql);
                            /*Выпадающий список*/
                            echo "<select  name='sport' type='text' form='form'>";
                            while ($object = mysqli_fetch_object($result_select)) {
                                echo "<option value = '$object->sport' > $object->sport </option>";
                            }
                            echo "</select>";
                            ?>
                        </div>

                        <!-- <div class="formfactor">
                            <p>Вид спорта:</p>
                            <select name="sport" type="text" form="form" multiple>
                                <option value="Фитнес; ">Фитнес; </option>
                                <option value="Аэробика; ">Аэробика; </option>
                                <option value="Пилатес; ">Пилатес; </option>
                                <option value="Тренажерный зал; ">Тренажерный зал; </option>
                                <option value="Бассейн; ">Бассейн; </option>
                                <option value="Йога; ">Йога; </option>
                                <option value="Фитнес; ">Фитнес; </option>
                            </select>
                        </div> -->



                        <div class="formfactor">
                            <p>Телефон:</p>
                            <input id="phone" type="text" name="tel" placeholder="+7 (985) 874-33-03"></input>
                        </div>

                        <div id="button">
                            <input type="submit" value="Добавить нового тренера">
                        </div>


                    </form>
                </div>
                <div class="admin-bottom-text">
                    <p> <b> Сайт разработан в рамках курсового проекта и не предназначен для коммерческого
                            использования</b>
                        <br>
                        Ivan Vasenkov -

                        <a href=" https://yandex.ru/maps/213/moscow/search/%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%B0/?ll=37.688580%2C55.713767&sll=30.373136%2C60.006291&sspn=0.034161%2C0.010723&z=10.32">
                            Moscow</a> ©2020 -

                        <a href="mailto:swayket@yandex.ru?subject=Отзыв о сайте math.website">
                            swayket@yandex.ru</a>
                        <br>

                        You are the only person who drinks <br> lemon tea in this house.</br>


                    </p>
                </div>
            </div>
        </div>
    </section>


    <!--============= 04. services-card =============-->

    <!--  -->
    <!--=============  для маски=============-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#phone").mask("+7 (999) 999-99-99");
        });
    </script>
</body>

</html>
<!-- =============  =============-->
<!-- <script src="/js/jquery-3.4.0.min.js"></script> -->
<script>
    // Отправка данных на сервер
    $('#form').trigger('reset');
    $(function() {
        'use strict';
        $('#form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: 'admin-add-trainers.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(this),
            });
            alert('Новый тренер добавлен в Базу Данных\n\Данные высланы на почту: swayket@yandex.ru');
            $('#form').trigger('reset'); // очистка формы
        });
    });
</script>
<!-- <script>
    // Отправка данных на сервер
    $('#form').trigger('reset');
    $(function () {
        'use strict';
        $('#form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'index-send.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(this),
            });

            var namebox;
            namebox = document.getElementById("name").value;
            var textbox;
            textbox = document.getElementById("text").value;
            var emailbox;
            emailbox = document.getElementById("email").value;
            var phonebox;
            phonebox = document.getElementById("phone").value;

            if (!namebox) {
                alert('Вероятнее всего, Вы забыли ввести имя!');
            }
            else if (!textbox) {
                alert('Вероятнее всего, Вы забыли ввести сообщение!');
            }
            else if (!emailbox && !phonebox) {
                alert('Пожалуйста, введите Ваш номер либо почтовый адрес.\n\(Эта информация необходима нам для связи с Вами)');
            }
            else {
                alert('Спасибо!\n\Ваша заявка отправлена.\n\Вам перезвонят в самое ближайшее время.');
                $('#form').trigger('reset');
            }
        });
    });
</script> -->