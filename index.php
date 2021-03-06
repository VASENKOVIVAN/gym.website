<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--title-->
    <title>Фитнес-клуб</title>



    <!-- Get user ip -->
    <script type="text/javascript" src="https://www.l2.io/ip.js?var=userip"></script>
    <!-- /Get user ip -->
    <!-- Yandex.Metrika counter -->
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
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            params: {
                'ip': userip
            }
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/62862643" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Yandex.Metrika counter -->

    <!-- <script type="text/javascript">
        var yaParams = {
            ip: "<? echo $_SERVER['REMOTE_ADDR']; ?>"
        };
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
    </noscript> -->
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
    <!-- библиотека jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(function() {
            $('.pop-up').hide();
            $('.pop-up').fadeIn(1000);
            $('.close-button').click(function(e) {

                $('.pop-up').fadeOut(700);
                $('#overlay').removeClass('blur-in');
                $('#overlay').addClass('blur-out');
                e.stopPropagation();
            });
        });
        document.cookie = 'visited; path=/';
    </script>
    <style>
        .cover {
            height: 100%;
            width: 100%;
            position: absolute;
            z-index: 1;
        }

        .blur-in {
            -webkit-animation: blur 2s forwards;
            -moz-animation: blur 2s forwards;
            -o-animation: blur 2s forwards;
            animation: blur 2s forwards;
        }

        .blur-out {
            -webkit-animation: blur-out 2s forwards;
            -moz-animation: blur-out 2s forwards;
            -o-animation: blur-out 2s forwards;
            animation: blur-out 2s forwards;
        }

        @-webkit-keyframes blur {
            0% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }

            100% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }
        }

        @-moz-keyframes blur {
            0% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }

            100% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }
        }

        @-o-keyframes blur {
            0% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }

            100% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }
        }

        @keyframes blur {
            0% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }

            100% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }
        }

        @-webkit-keyframes blur-out {
            0% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }

            100% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }
        }

        @-moz-keyframes blur-out {
            0% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }

            100% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }
        }

        @-o-keyframes blur-out {
            0% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }

            100% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }
        }

        @keyframes blur-out {
            0% {
                -webkit-filter: blur(4px);
                -moz-filter: blur(4px);
                -o-filter: blur(4px);
                -ms-filter: blur(4px);
                filter: blur(4px);
            }

            100% {
                -webkit-filter: blur(0px);
                -moz-filter: blur(0px);
                -o-filter: blur(0px);
                -ms-filter: blur(0px);
                filter: blur(0px);
            }
        }

        .content {
            width: 650px;
            margin: 0 auto;
            padding-top: 100px;
        }

        span {
            color: dimgray;
        }

        .pop-up {
            position: fixed;
            margin: 5% auto;

            left: 0;
            right: 0;
            z-index: 99;
        }

        .box {
            background-color: #bebebe;
            border-radius: 180px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: -1%;
            position: relative;
            -webkit-box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.1);
            /* box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.1); */
            background: #fc0;
            /* Цвет фона */
            box-shadow: 0 0 900px rgba(0, 0, 0, 1);
            /* Параметры тени */
            padding: 10px;
        }

        .button {
            margin: 0 auto;
            color: rgb(248, 66, 20);
            margin-bottom: 23px;
            font-size: 40px
        }

        /* .button:hover {
            background-color: #7CCF29;
            -webkit-box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.1);
        } */
    </style>
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
                        <a style="color: #c4d114;" class="active" href="index.php">Главная</a>
                        <a href="services.php">Услуги</a>
                        <a href="trainers.php">Тренеры</a>
                        <a href="subscription.php">Абонементы</a>
                        <a href="contacts.php">Контакты</a>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 button-log-nav">
                    <div class="button-log wow wobble">
                        <a href="#responsee">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row pop-up">
        <div style="width: 700px; height: 300px" class="box small-6 large-centered">
            <a style="margin: 0 auto;
            color: rgb(248, 66, 20);
            margin-bottom: 23px;
            font-size: 40px" href="#" class="close-button">&#10006;</a>
            <h3>Добро пожаловать</h3>
            <p style="font-size: 20px">Оставаясь на нашем сайте вы соглашаетесь с политикой конфиденциальности</p>
            <p><a style="
            background: rgb(248, 66, 20);
            color: #fff;
            padding: 20px 5px;
            width: 218px;
            text-align: center;
            font-size: 30px;
            font-weight: 600;
            font-size: 1.1em;
            text-decoration: none;
            border-radius: 10px;" href="privacy.php">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a></p>
        </div>
    </div>
    <!--============= 01.5 CAROUSEL =============-->
    <section class="car">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="wow slideInLeft">Спорт</h1>
                        <p class="wow slideInRight">это неотъемлемая часть общественной жизни, <br> один из элементов
                            системы ценностей
                            современной культуры</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Наш фитнес-клуб</h1>
                        <p>это место, где забота о посетителях стоит на первом месте, это занятия фитнесом для всей
                            семьи и
                            каждого,
                            кто ценит свое здоровье и хочет выглядеть
                            безупречно.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Наш фитнес-клуб</h1>
                        <p>
                            <!-- это занятия фитнесом для всей семьи и каждого,
                            кто ценит свое здоровье и хочет выглядеть
                            безупречно,--> это не изнурительные
                            однообразные и монотонные тренировки –
                            это гармоничное развитие и совершенствование личности,
                            это команда профессионалов,
                            которая своим примером вдохновит Вас стать лучше!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--============= 03. SECOND SECTION =============-->
    <section class="second">
        <div class="container">
            <div class="row second">
                <div class="second-title col-md-12">
                    <div>
                        <h1>Спорт – это здоровье, спорт это жизнь</h1>
                    </div>
                    <div>
                        <p>Современный, просторный, оснащенный передовым оборудованием фитнес-клуб
                            бизнес-класса. Место, где забота о посетителях стоит на первом
                            месте.</p>
                    </div>
                </div>
            </div>
            <div class="row second">
                <div class="col-md-4">
                    <div class="icon wow fadeInDownBig">
                        <i class="icon-1 fas fa-dumbbell"></i>
                    </div>
                    <h4 class="wow fadeInLeft">
                        Фитнес-клуб
                    </h4>
                    <p class="wow fadeInLeftBig">Вы с лёгкостью раскроете свой творческий потенциал на 100%</p>
                </div>
                <div class="col-md-4">
                    <div class="test wow fadeInDownBig">
                        <i class="icon-2 fas fa-fist-raised"></i>
                    </div>
                    <h4 class="wow  fadeInUp">
                        Тренажерный зал
                    </h4>
                    <p class="wow fadeInUpBig">Идеальное место для тех, кто хочет повысить мышечный тонус, приобрести
                        подтянутую фигуру.</p>
                </div>
                <div class="col-md-4">
                    <div class="test wow fadeInDownBig">
                        <i class="icon-3 fas fa-running"></i>
                    </div>
                    <h4 class="wow fadeInRight">
                        Классы
                    </h4>
                    <p class="wow fadeInRightBig">Широкий выбор программ - фитнес, аэробика, тренажерный зал...</p>
                </div>
            </div>
    </section>
    <!--============= 04. EVENT SECTION =============-->
    <section class="event">
        <div class="row">
            <div class="event1 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-2 col-3">
                    </div>
                    <div class="col-md-10 col-5 event-date">
                        <p>15 июля 2020, Среда</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-3">

                    </div>
                    <div class="col-md-10 col-5 event-name">
                        <h2>Приглашаем Вас<br>на семинар</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-3">
                    </div>
                    <div class="col-md-10 col-5">
                        <ul>
                            <li><i class="fas fa-check"> </i>ᅠПравильное дыхание</li>
                            <li><i class="fas fa-check"> </i>ᅠМедитации</li>
                            <li><i class="fas fa-check"> </i>ᅠПрисоединяйтесь к сообществу</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-3">
                    </div>
                    <div class="col-md-10 col-5">
                        <div class="button-log wow wobble">
                            <a href="#responsee">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event2 col-md-6 col-sm-0">
            </div>
        </div>
    </section>
    <!--============= 05. REASONS SECTION =============-->
    <section class="reasons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="wow fadeInDownBig">168 причин выбрать наш фитнес-клуб</h1>
                </div>
            </div>
            <div class="row reasrow">
                <div class="col-md-5 reas left wow fadeInLeft">
                    <div>
                        <h5><b>Причина 1</b></h5>
                        <p>В нашем фитнес-клубе максимально индивидуальный подход к каждому клиенту</p>
                    </div>
                    <div>
                        <i class="icon-4 fas fa-snowman"></i>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 reas right wow fadeInRightBig">
                    <div>
                        <i class="icon-4 fas fa-user-friends"></i>
                    </div>
                    <div>
                        <h5><b>Причина 2</b></h5>
                        <p>Самый сильный состав инструкторов с огромным опытом, знаниями только у нас</p>
                    </div>
                </div>
            </div>
            <div class="row reasrow">
                <div class="col-md-5 reas left wow fadeInLeftBig">
                    <div>
                        <h5><b>Причина 3</b></h5>
                        <p>Неповторимая атмосфера уюта и доброжелательности</p>
                    </div>
                    <div>
                        <i class="icon-4 fas fa-globe-europe"></i>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 reas right wow fadeInRight">
                    <div>
                        <i class="icon-4 fas fa-layer-group"></i>
                    </div>
                    <div>
                        <h5><b>Причина 168</b></h5>
                        <p>Комфорт как для «фитнесистов» со стажем, так и для новичков</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= 06. GET BACK FORM =============-->
    <div id="info"></div>
    <section class="response">
        <div class="container">
            <h1 id="responsee">Узнать больше</h1>
            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <!-- <form action="dbconnect.php" method="POST" id="form"> -->
                    <!-- <form action="index-send.php" method="POST" id="form"> -->
                    <form action="index-send.php" method="POST" id="form">
                        <!-- <form action="mail.php" method="POST" id="form"> -->
                        <div class="response__form">
                            <div class="inp">
                                <p>Ваше имя: </p>
                                <p><input style="text-transform: capitalize;" id="name" class="form-control" type="text" name="name" placeholder="Ольга Трусова"></p>
                            </div>
                            <div class="inp">
                                <p>E-mail: </p>
                                <p> <input id="email" class="form-control" type="email" name="email" placeholder="name@example.com">
                                </p>
                            </div>
                            <div class="inp">
                                <p>Телефон: </p>
                                <p> <input id="phone" class="form-control" type="text" name="tel" placeholder="+7 (999) 999-99-99">
                                </p>
                            </div>

                            <div class="form-group">
                                <p>Сообщение: </p>
                                <textarea id="text" class="form-control" type="textarea" id="exampleFormControlTextarea1" rows="4" name="text" placeholder="Хотел бы подробнее узнать, уточнить.."></textarea>
                            </div>
                            <!-- <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" name="done" for="exampleCheck1">Согласие на обработку
                                    персональных
                                    данных</label>
                            </div> -->
                            <div class="hvr-wobble-bottom-div twobutt wow wobble">
                                <input onclick="f1()" class="hvr-wobble-bottom" type="submit" value="Перезвоните мне">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">

                </div>
            </div>
    </section>
    <!--============= 07. WHERE =============-->
    <section class="where second">
        <div class="container">
            <div class="row second">
                <div class="col-md-4">
                    <div class="icon wow flipInX">
                        <i class="icon-1 fas fa-home"></i>
                    </div>
                    <h4 class="wow fadeInLeftBig">
                        Адрес:
                    </h4>
                    <p class="wow fadeInLeft">Москва, Волоколамское ш., 4/6</p>
                </div>
                <div class="col-md-4">
                    <div class="test  wow flipInX">
                        <i class="icon-2 fas fa-phone"></i>
                    </div>
                    <h4 class="wow fadeInDown">
                        Телефон:
                    </h4>
                    <p class="wow fadeInDownBig">+7 (985) 874-33-03</p>
                </div>
                <div class="col-md-4">
                    <div class="test wow flipInX">
                        <i class="icon-3 far fa-envelope"></i>
                    </div>
                    <h4 class="wow fadeInRight">
                        Email:
                    </h4>
                    <p class="wow fadeInRightBig">swayket@yandex.ru</p>
                </div>
            </div>
    </section>
    <!--============= MAP =============-->
    <!-- https://yandex.ru/map-constructor/ -->
    <iframe class="wow rotateInDownRight" src="https://yandex.ru/map-widget/v1/?um=constructor%3Af9c6a32390a9efe9e1edcecbb95039754069886735784eaa602e5dc6e12b40d9&amp;source=constructor" width="100%" height="277" frameborder="0"></iframe>
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
    <!-- <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script> -->

    <script src="js/bootstrap.min.js"></script>

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



<!--=============  =============-->
<!-- <script src="/js/jquery-3.4.0.min.js"></script> -->
<script>
    // Отправка данных на сервер
    $('#form').trigger('reset');
    $(function() {
        'use strict';
        $('#form').on('submit', function(e) {
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
            } else if (!textbox) {
                alert('Вероятнее всего, Вы забыли ввести сообщение!');
            } else if (!emailbox && !phonebox) {
                alert('Пожалуйста, введите Ваш номер либо почтовый адрес.\n\(Эта информация необходима нам для связи с Вами)');
            } else {
                alert('Спасибо!\n\Ваша заявка отправлена.\n\Вам перезвонят в самое ближайшее время.');
                $('#form').trigger('reset');
            }
        });
    });
</script>