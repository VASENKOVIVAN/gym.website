<?php
// Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
// Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
// Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
// if (
//     isset($_POST['surname']) &&
//     isset($_POST['name']) &&
//     isset($_POST['patronymic']) &&
//     isset($_POST['address']) &&
//     isset($_POST['tel'])
// ) {

//     // Параметры для подключения
//     $db_host = "localhost";
//     $db_user = " "; // Логин БД
//     $db_password = " "; // Пароль БД
//     $db_base = 'id13203941_customers'; // Имя БД
//     $db_table = "clients"; // Имя Таблицы БД

//     // Подключение к базе данных
//     $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

//     $result = $mysqli->query("INSERT INTO " . $db_table . " (surname,name,patronymic,address,tel) VALUES ('$surname','$name','$patronymic','$address','$tel')");

//     if ($result == true) {
//         echo " <h1> <b>Спасибо</b>, данные отправлены!</h1>  </br>  <button> <a style='margin: 1em; font-size: 2em' href='/index.php'>Вернуться на сайт</a> </button>";
//     } else {
//         echo "Упс, что то пошло не так ;(";
//     }
// }
// Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
//  Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
// Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ


// Файлы phpmailer ВСЕ ЧТО НИЖЕ, НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ ПОЧТУ
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь

/**
 * проверяем, что функция mb_ucfirst не объявлена
 * и включено расширение mbstring (Multibyte String Functions)
 */
if (!function_exists('mb_ucfirst') && extension_loaded('mbstring')) {
    /**
     * mb_ucfirst - преобразует первый символ в верхний регистр
     * @param string $str - строка
     * @param string $encoding - кодировка, по-умолчанию UTF-8
     * @return string
     */
    function mb_ucfirst($str, $encoding = 'UTF-8')
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) .
            mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }
}

// Переменные, которые отправляет пользователь

// делаем заглавную букву
$name = $_POST['name'];
$first = mb_substr($name, 0, 1, 'UTF-8'); //первая буква
$last = mb_substr($name, 1); //все кроме первой буквы
$first = mb_strtoupper($first, 'UTF-8');
$last = mb_strtolower($last, 'UTF-8');
$name = $first . $last;
$name = "$name";

$amount_visits = $_POST['amount_visits'];
$amount_days = $_POST['amount_days'];
$time_start = $_POST['time_start'];
$time_end = $_POST['time_end'];
$price = $_POST['price'];

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

    $mail->Subject = 'В БД добавлен новый абонемент';
    $mail->Body    = "
        <h1>Новый абонемент добавлен в базу данных БД: </h1><br>
        <b>Название: </b> $name <br>
        <b>Количество посещений: </b> $amount_visits <br>
        <b>Количиство дней: </b> $amount_days <br>
        <b>Время действия: </b> с $time_start до $time_end <br>
        <b>Цена: </b> $price";


    // Проверяем отравленность сообщения
    if ($mail->send()) {
        echo "$msg";
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }


    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ

    if (isset($_POST['name']) && isset($_POST['amount_visits']) && isset($_POST['amount_days']) && isset($_POST['time_start']) && isset($_POST['time_end']) && isset($_POST['price'])) {
        // Параметры для подключения
        // $db_host = "localhost";
        // $db_user = "id13203941_admin"; // Логин БД
        // $db_password = "DfyzDfctyrjd777@"; // Пароль БД
        // $db_base = 'id13203941_customers'; // Имя БД

        // Параметры для подключения берем из файла
        require 'connect.php';

        $db_table = "Subscriptions"; // Имя Таблицы БД
        // Подключение к базе данных
        $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

        $result = $mysqli->query("INSERT INTO " . $db_table . " (name,amount_visits,amount_days,time_start,time_end,price) VALUES ('$name','$amount_visits','$amount_days','$time_start','$time_end','$price')");

        if ($result == true) {
            echo " <h1> <b>Спасибо</b>, данные отправлены!</h1>  </br>  <button> <a style='margin: 1em; font-size: 2em' href='/index.php'>Вернуться на сайт</a> </button>";
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
