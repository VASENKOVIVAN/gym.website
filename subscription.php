<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--title-->
    <title>Абонементы Фитнес-клуба</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        var yaParams = {
            ipaddress: "<? echo $_SERVER['REMOTE_ADDR']; ?>"
        };
    </script>
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(62862643, "init", {
            params: window.yaParams,
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            trackHash: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/62862643" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
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
                        <a style="color: #c4d114;" class="active" href="subscription.php">Абонементы</a>
                        <a href="contacts.php">Контакты</a>
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
                    <h3>Абонементы</h3>
                </div>
                <div class="col-6 arrow">
                    <a href="index.php">Главная </a>
                    <i class="fas fa-arrow-right"></i>
                    <p>Абонементы</p>
                </div>
            </div>
        </div>
    </section>
    <!--============= 04. sub =============-->
    <section class="sub">
        <div class="container">

            <div class="row cardss">
                <div class="col-md-4 col-sm-6 multi">
                    <div class="card border-primary mb-3">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Тренажерный зал</h5>
                            <p class="card-text">Количество посещений: ∞ <br> Количество дней: 30</p>
                        </div>
                        <div class="card-footer  text-white bg-primary border-primary">1200р.</div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6 multi">
                    <div class="card border-primary mb-3">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Тренажерный зал</h5>
                            <p class="card-text">Количество посещений: 12 <br> Количество дней: 30</p>
                        </div>
                        <div class="card-footer  text-white bg-primary border-primary">1000р.</div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-12 multi">
                    <div class="card border-primary mb-3">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Тренажерный зал</h5>
                            <p class="card-text">Количество посещений: 8 <br> Количество дней: 30</p>
                        </div>
                        <div class="card-footer  text-white bg-primary border-primary">800р.</div>
                    </div>
                </div>
            </div>

            <div class="row cardss">
                <div class=" col-md-6 col-sm-6 multi">
                    <div class="card border-success mb-3">
                        <div class="card-body text-success">
                            <h5 class="card-title">Дневной</h5>
                            <p class="card-text">Количество посещений: ∞ <br> Количество дней: 30 <br> С 8:00 до 16:00
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-success  border-success">1200р.</div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6 multi">
                    <div class="card border-success mb-3">
                        <div class="card-body text-success">
                            <h5 class="card-title">Дневной</h5>
                            <p class="card-text">Количество посещений: 12 <br> Количество дней: 30 <br> С 8:00 до 16:00
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-success  border-success">900р.</div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="card border-success mb-3" style="width: 18rem;">
                        <div class="card-body text-success">
                            <h5 class="card-title">Тренаженрый зал</h5>
                            <p class="card-text">Количество посещений: 8 <br> Количество дней: 30</p>
                        </div>
                        <div class="card-footer  text-white bg-success  border-success">800р.</div>
                    </div>
                </div> -->
            </div>
            <div class="row cardss">
                <div class="col-md-6 col-sm-6 multi">
                    <div class="card border-secondary mb-3">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Полный</h5>
                            <p class="card-text">Количество посещений: ∞ <br> Количество дней: 30 <br> С 8:00 до 22:00
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-secondary  border-secondary">1300р.</div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6 multi">
                    <div class="card border-secondary mb-3">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Полный</h5>
                            <p class="card-text">Количество посещений: 12 <br> Количество дней: 30 <br> С 8:00 до 22:00
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-secondary  border-secondary">1000р.</div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="card border-success mb-3" style="width: 18rem;">
                        <div class="card-body text-success">
                            <h5 class="card-title">Тренаженрый зал</h5>
                            <p class="card-text">Количество посещений: 8 <br> Количество дней: 30</p>
                        </div>
                        <div class="card-footer  text-white bg-success  border-success">800р.</div>
                    </div>
                </div> -->
            </div>
            <div class="row cardss">
                <div class="col-md-12 col-sm-12 multi">
                    <div class="card border-danger mb-3">
                        <div class="card-body text-danger">
                            <h5 class="card-title">Разовое посещение</h5>
                            <p class="card-text">Количество посещений: 1 <br> Количество дней: 30
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-danger  border-danger">150р.</div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="card border-secondary mb-3" style="width: 18rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Полный</h5>
                            <p class="card-text">Количество посещений: 12 <br> Количество дней: 30 <br> С 8:00 до 22:00
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-secondary  border-secondary">1000р.</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-success mb-3" style="width: 18rem;">
                        <div class="card-body text-success">
                            <h5 class="card-title">Тренаженрый зал</h5>
                            <p class="card-text">Количество посещений: 8 <br> Количество дней: 30</p>
                        </div>
                        <div class="card-footer  text-white bg-success  border-success">800р.</div>
                    </div>
                </div> -->
            </div>
            <div class="row cardss">
                <div class="col-md-4 col-sm-6 multi">
                    <div class="card border-warning mb-3">
                        <div class="card-body text-warning">
                            <h5 class="card-title">Безлимитная полная карта</h5>
                            <p class="card-text">Количество посещений: ∞ <br> Количество дней: 30
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-warning  border-warning">2000р.</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 multi">
                    <div class="card border-dark mb-3">
                        <div class="card-body text-dark">
                            <h5 class="card-title">Бизнес абонемент</h5>
                            <p class="card-text">Количество посещений: 10 <br> Количество дней: 84
                            </p>
                        </div>
                        <div class="card-footer  text-white bg-dark  border-dark">1600р.</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 multi">
                    <div class="card border-info mb-3">
                        <div class="card-body text-info">
                            <h5 class="card-title">Мульти-карта</h5>
                            <p class="card-text">Количество посещений: ∞ <br> Количество дней: 365</p>
                        </div>
                        <div class="card-footer  text-white bg-info  border-info">2400р.</div>
                    </div>
                </div>
            </div>
        </div>


    </section>






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