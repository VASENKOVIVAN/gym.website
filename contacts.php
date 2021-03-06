<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--title-->
    <title>Контакты Фитнес-клуба</title>
    <link rel="icon" href="img/iconka.png">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="css/styles.css">

    <!--animate css-->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--fontawesome css-->
    <script src="https://kit.fontawesome.com/0f13d382a3.js" crossorigin="anonymous"></script>
    <!--googleapis css-->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->

</head>

<body>
    <!--============= 01. HEADER TOP =============-->
    <header>
        <div class="container">
            <div class="row cent">
                <div class="col-lg-3 col-12 header-email">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="mailto:swayket@yandex.ru?subject=Отзыв о сайте math.website">
                            swayket@yandex.ru</a>
                    </div>
                </div>
                <div class="col-lg-9 col-12 header-time-num d-flex justify-content-right">
                    <div>
                        <i class="far fa-clock"></i>
                        <p id="time">Пн-Пт: 7:00 - 23:00, Сб-Вс: 9:00 - 22:00</p>
                    </div>
                    <div style="margin-right: 30px;">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+7(985) 874-33-03">+7 (985) 874-33-03</a>

                    </div>
                    <div>
                        <?php
                        if ($_COOKIE['user'] == '') :
                        ?>
                            <a style="background: #8dd0d3;
                        color: #fff;
                        width: 118px;
                        height: 30px;
                        padding: 7px 30px ; 
                        text-align: center;
                        border-radius: 10px;" href="login.php">Войти</a>
                        <?php else : ?>
                            <a style="background: #8dd0d3;
                        color: #fff;
                        width: 118px;
                        height: 30px;
                        padding: 7px 30px ; 
                        text-align: center;
                        border-radius: 10px;" href="login.php"><?= $_COOKIE['user'] ?></a>
                        <?php endif; ?>
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
                        <li><a class="menu__item" href="services.php">Услуги</a></li>
                        <li><a class="menu__item" href="trainers.php">Тренеры</a></li>
                        <li><a class="menu__item" href="subscription.php">Абонементы</a></li>
                        <li><a class="menu__item" href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 ">
                    <img src="img/logo.png" alt="Логотип фитнес-клуб">
                    <!-- <img src="/img/logo2.png" alt=""> -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <nav class="menuuu">
                        <a href="index.php">Главная</a>
                        <a href="services.php">Услуги</a>
                        <a href="trainers.php">Тренеры</a>
                        <a href="subscription.php">Абонементы</a>
                        <a style="color: #c4d114;" class="active" href="contacts.php">Контакты</a>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 button-log-nav">
                    <div class="button-log wow wobble">
                        <a href="index.php#responsee">Узнать больше</a>
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
                    <h3>Контакты</h3>
                </div>
                <div class="col-6 arrow">
                    <a href="index.php">Главная </a>
                    <i class="fas fa-arrow-right"></i>
                    <p>Контакты</p>
                </div>
            </div>
        </div>
    </section>
    <!--============= 04. contacts =============-->
    <section class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 map">

                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af9c6a32390a9efe9e1edcecbb95039754069886735784eaa602e5dc6e12b40d9&amp;source=constructor" width="400" height="400" frameborder="0" style="border-radius:200px;"></iframe>


                </div>
                <div class="col-sm-12 col-md-6">
                    <h3 class="wow fadeInLeftBig">Адрес: </h3>
                    <p class="wow fadeInRightBig">Москва, Волоколамское ш., 4/6</p>
                    <h3 class="wow fadeInLeftBig">Тел: </h3>
                    <p class="wow fadeInRightBig">+7 (985) 874-33-03</p>
                    <h3 class="wow fadeInLeftBig">E-mail:</h3>
                    <p class="wow fadeInRightBig">swayket@yandex.ru</p>
                    <h3 class="wow fadeInLeftBig">Часы работы:</h3>
                    <p class="wow fadeInRightBig">Пн-Пт: 8:00 - 23:00<br>
                        Сб-Вс: 8:00 - 22:00</p>
                    <h3 class="wow fadeInLeftBig">Адрес в сети интернет: </h3>
                    <p class="wow fadeInRightBig"> vasenkovivan.github.io/gym.website/</p>

                    <!--круглый гугл  -->
                    <!-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.982183349251!2d37.49787631537423!3d55.81090969497716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54837ca747699%3A0xddf76528b536d2bb!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0JDQstC40LDRhtC40L7QvdC90YvQuSDQmNC90YHRgtC40YLRg9GC!5e0!3m2!1sru!2sru!4v1588494506867!5m2!1sru!2sru"
                        width="300" height="300" frameborder="0" style="border:20px solid #f83a3a;border-radius:250px;"
                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                </div>
            </div>
        </div>
    </section>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR8P72HMX3zllKeeZt8X89dJWMEu0LSX8&callback=myMap" async defer></script>

    <!--============= 07. FOOTER =============-->
    <footer>
        <div class="container">
            <div class="row">
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
                    <a style="font-size: 25px" href="privacy.php">Политика конфиденциальности</a>
                    <!-- <a href="login.php">Вход в панель управления</a> -->
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