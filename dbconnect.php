 <?php

// echo '<script>
// alert( "Сообщение до скрипта" );
// </script>';

// echo '<script src="jquery-3.4.0.min.js"></script>';
// echo '<script src="/js/pushh.js"></script>';

// echo '<script>
// alert( "И после" );
// </script>';

// if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['text'])){

//     // Переменные с формы
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $tel = $_POST['tel'];
//     $text = $_POST['text'];

//     // Параметры для подключения
//     $db_host = "localhost"; 
//     $db_user = "id13203941_admin"; // Логин БД
//     $db_password = "DfyzDfctyrjd777@"; // Пароль БД
//     $db_base = 'id13203941_customers'; // Имя БД
//     $db_table = "mytable"; // Имя Таблицы БД
    
//     // Подключение к базе данных
//     $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

//     // Если есть ошибка соединения, выводим её и убиваем подключение
// 	if ($mysqli->connect_error) {
// 	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
// 	}
    
//     $result = $mysqli->query("INSERT INTO ".$db_table." (name,email,tel,text) VALUES ('$name','$email','$tel','$text')");
    
//     if ($result == true){
//         echo " <h1> <b>Спасибо</b>, данные отправлены!</h1>  </br>  <button> <a style='margin: 1em; font-size: 2em' href='/index.html'>Вернуться на сайт</a> </button>";
//     }else{
//     	echo "Упс, что то пошло не так ;(";
//     }
// }
// ?>

<!-- echo '<script>
$("#form").trigger("reset");
    $(function () {
        "use strict";
        $("#form").on("submit", function (e) {
            e.preventDefault();
            $.ajax({
                url: "send.php",
                type: "POST",
                contentType: false,
                processData: false,
                data: new FormData(this),
                success: function (msg) {
                    console.log(msg);
                    if (msg == "ok") {
                        alert("Сообщение отправлено");
                        $("#form").trigger("reset"); // очистка формы
                    } else {
                        alert("Ошибка");
                    }
                }
            });
        });
    });
</script>'; -->