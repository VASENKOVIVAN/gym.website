<?php
// Файлы phpmailer ВСЕ ЧТО НИЖЕ, НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ ПОЧТУ
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$text = $_POST['text'];

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $msg = "ok";
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'fitness-klub.bot'; // Логин на почте
    $mail->Password   = 'bot.password'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('fitness-klub.bot@ya.ru', 'Фитнес-клуб - Бот'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('swayket@yandex.ru');
    // Само письмо
    $mail->isHTML(true);

    $mail->Subject = 'Новая заявка (перезвонить)';
    $mail->Body    = "<b>Имя:</b> $name <br>
        <b>Почта:</b> $email <br>
        <b>Телефон:</b> $tel <br>
        <br>
        <b>Сообщение:</b><br>$text";


    // Проверяем отравленность сообщения
    if ($mail->send()) {
        echo "$msg";
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }


    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['text'])) {

        // Параметры для подключения
        $db_host = "localhost";
        $db_user = "id13203941_admin"; // Логин БД
        $db_password = "DfyzDfctyrjd777@"; // Пароль БД
        $db_base = 'id13203941_customers'; // Имя БД
        $db_table = "mytable"; // Имя Таблицы БД

        // Подключение к базе данных
        $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

        $result = $mysqli->query("INSERT INTO " . $db_table . " (name,email,tel,text) VALUES ('$name','$email','$tel','$text')");

        if ($result == true) {
            echo " <h1> <b>Спасибо</b>, данные отправлены!</h1>  </br>  <button> <a style='margin: 1em; font-size: 2em' href='/index.html'>Вернуться на сайт</a> </button>";
        } else {
            echo "Упс, что то пошло не так ;(";
        }
    }
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ

} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
