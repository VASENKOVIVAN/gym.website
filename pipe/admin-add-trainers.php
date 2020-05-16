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
$surname = $_POST['surname'];
$surname = mb_convert_case($surname, MB_CASE_TITLE, 'UTF-8'); // делаем заглавную букву каждого слова
$name = $_POST['name'];
$name = mb_convert_case($name, MB_CASE_TITLE, 'UTF-8'); // делаем заглавную букву каждого слова
$patronymic = $_POST['patronymic'];
$patronymic = mb_convert_case($patronymic, MB_CASE_TITLE, 'UTF-8'); // делаем заглавную букву каждого слова
$sport = $_POST['sport'];
$tel = $_POST['tel'];

// делаем заглавную букву
// $text = $_POST['text'];
// $first = mb_substr($text, 0, 1, 'UTF-8'); //первая буква
// $last = mb_substr($text, 1); //все кроме первой буквы
// $first = mb_strtoupper($first, 'UTF-8');
// $last = mb_strtolower($last, 'UTF-8');
// $text = $first . $last;
// $text = "$text";


// if (mb_strlen($name) < 1) {
//     exit();
// }
// if (mb_strlen($text) < 1) {
//     exit();
// }
// if (mb_strlen($email) < 1 and mb_strlen($tel) < 3) {
//     exit();
// }







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

    $mail->Subject = 'В БД добавлен новый тренер';
    $mail->Body    = "
        <h1>Новый тренер добавлен в базу данных БД: </h1><br>
        <b>Фамилия: </b> $surname <br>
        <b>Имя: </b> $name <br>
        <b>Отчество: </b> $patronymic <br>
        <b>Вид спорта: </b> $sport <br>
        <b>Телефон: </b> $tel";

    // Проверяем отравленность сообщения
    if ($mail->send()) {
        echo "$msg";
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }


    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ
    // Файлы phpmailer ВСЕ ЧТО НИЖЕ, до следующего коммента НУЖНО ДЛЯ ТОГО ЧТО БЫ ПУШИТЬ БДБДБДБДБДБДДБДБ

    if (isset($_POST['surname']) && isset($_POST['name'])  && isset($_POST['patronymic']) && isset($_POST['sport']) && isset($_POST['tel'])) {



        // Параметры для подключения
        // $db_host = "localhost";
        // $db_user = "id13203941_admin"; // Логин БД
        // $db_password = "DfyzDfctyrjd777@"; // Пароль БД
        // $db_base = 'id13203941_customers'; // Имя БД


        // Параметры для подключения берем из файла
        require 'connect.php';

        $db_table = "Trainers"; // Имя Таблицы БД
        // Подключение к базе данных
        $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

        $result = $mysqli->query("INSERT INTO " . $db_table . " (surname,name,patronymic,sport,tel) VALUES ('$surname','$name','$patronymic','$sport','$tel')");

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
