// Переменные с формы
<?php
if (isset($_POST['name']) && isset($_POST['text'])){

    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "id13203941_admin"; // Логин БД
    $db_password = "DfyzDfctyrjd777@"; // Пароль БД
    $db_base = 'id13203941_customers'; // Имя БД
    $db_table = "mytable"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (name,text) VALUES ('$name','$text')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>
