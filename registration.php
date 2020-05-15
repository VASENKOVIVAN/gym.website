<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--title-->
    <title>Услуги Фитнес-клуба</title>
    <link rel="icon" href="img/iconka.png">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="css/styles.css">

    <!--login css-->
    <link rel="stylesheet" href="css/login.css">

    <!--animate css-->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--fontawesome css-->
    <script src="https://kit.fontawesome.com/0f13d382a3.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--============= 01. HEADER TOP =============-->
    <header>
        <div class="container">
            <div class="row cent">

                <div class="col-md-4 col-12 header-email">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="mailto:swayket@yandex.ru?subject=Отзыв о сайте math.website">
                            swayket@yandex.ru</a>
                    </div>
                </div>

                <div class="col-md-8 col-12 header-time-num d-flex justify-content-right">
                    <div>
                        <i class="far fa-clock"></i>
                        <p id="time">Пн-Пт: 7:00 - 23:00, Сб-Вс: 9:00 - 22:00</p>
                    </div>
                    <div>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+7(985) 874-33-03">+7 (985) 874-33-03</a>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= 02. NAV SECTION =============-->
    <section class="nav-section">
        <div class="container ">
            <div class="row nav-section__row">
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span></span>
                    </label>

                    <ul class="menu__box">
                        <li><a class="menu__item" href="index.php">Главная</a></li>
                        <li><a class="menu__item" href="services.html">Услуги</a></li>
                        <li><a class="menu__item" href="trainers.html">Тренеры</a></li>
                        <li><a class="menu__item" href="subscription.html">Абонементы</a></li>
                        <li><a class="menu__item" href="contacts.html">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 ">
                    <img src="img/logo.png" alt="Логотип фитнес-клуб">
                    <!-- <img src="/img/logo2.png" alt=""> -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <nav class="menuuu">
                        <a href="index.php">Главная</a>
                        <a href="services.html">Услуги</a>
                        <a href="trainers.html">Тренеры</a>
                        <a href="subscription.html">Абонементы</a>
                        <a href="contacts.html">Контакты</a>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 button-log-nav">
                    <div class="button-log wow wobble">
                        <a href="index.html#responsee">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= 03. WHERE STATUS =============-->
    <section class="where-status">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Вход в аккаунт</h3>
                </div>
                <div class="col-6 arrow">
                    <a href="index.html">Главная </a>
                    <i class="fas fa-arrow-right"></i>
                    <p>Вход</p>
                </div>
            </div>
        </div>
    </section>
    <!--============= 04. services-card =============-->

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-6 get-panelad">
                    <div>
                        <h3>Регистрация</h3>
                    </div>
                    <div>
                        <form action="/validation-form/check.php" method="POST">
                            <p>Логин</p>
                            <input type="text" class="form-control" name="login" id="login" placeholder="Ivanov1999"><br>

                            <p>Имя</p>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Иван Иванов"><br>

                            <p>Пароль</p>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>

                            <div class=" twobutt">
                                <input class="" type="submit" value="Зарегистрироваться">
                            </div>
                        </form>
                    </div>
                    <div>
                        <p style="text-align: center">Если у Вас уже есть аккаунт, можете <a style="color: blue" href="login.php">ВОЙТИ</a> </p>
                    </div>
                </div>
                <div class="col-12 col-md-3"></div>
            </div>
        </div>
    </section>


    <!--============= 07. FOOTER =============-->
    <footer>
        <div class="container">
            <div class="row">
                <p> <b> Сайт разработан в рамках курсового проекта и не предназначен для коммерческого использования</b>
                    <br>
                    Copyright ©2020 -

                    <a href=" https://yandex.ru/maps/213/moscow/search/%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%B0/?ll=37.688580%2C55.713767&sll=30.373136%2C60.006291&sspn=0.034161%2C0.010723&z=10.32">
                        Moscow</a> -

                    <a href="mailto:swayket@yandex.ru?subject=Отзыв о сайте math.website">
                        swayket@yandex.ru</a>
                    <br>

                    You are the only person who drinks <br> lemon tea in this house.</br>

                </p>
            </div>
        </div>
    </footer>



    <!--=============  =============-->
    <!--=============  =============-->
    <!--=============  =============-->
    <!--=============  =============-->
    <!--============= SCRIPTS =============-->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<!-- <script>
    var loginbox;
    loginbox = document.getElementById("login").value;
    var namebox;
    namebox = document.getElementById("name").value;
    var passbox;
    passbox = document.getElementById("pass").value;

    if (loginbox.length < 5) {
        alert('Логин должен содержать более 5 символов!');
    } else if (loginbox = "Admin") {
        alert('Вы не можете зарегисрироваться с логином Admin!');
    } else if (namebox.length < 5) {
        alert('Имя должно содержать более 5 символов!');
    } else if (namebox = "admin") {
        alert('Вы не можете зарегисрироваться с именем admin!');
    } else if (passbox.length < 5) {
        alert('Имя должно содержать более 5 символов!');
    } else {
        alert('Спасибо!\n\Ваша заявка отправлена.\n\Вам перезвонят в самое ближайшее время.');
        $('#form').trigger('reset');
    }
</script> -->