<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Маска для поля ввода телефона </title>
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

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        form {
            background-color: #f3f3f3;
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <form action="mail.php" method="POST">
                    <legend>Заголовок формы</legend>

                    <div class="form-group">
                        <label for="">Введите ваше имя</label>
                        <input type="text" class="form-control" id="" name="user_name" placeholder="Например, Иван">
                    </div>

                    <div class="form-group">
                        <label for="">Введите номер телефона</label>
                        <input type="text" class="form-control" id="" name="user_phone" placeholder="+7 (999) 99 99 999">
                    </div>

                    <div class="form-group">
                        <label for="">Введите email</label>
                        <input type="text" class="form-control" id="" name="user_email" placeholder="mail@mail.ru">
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить форму</button>
                </form>
            </div><!-- .col-sm-4 -->
        </div> <!-- .row -->

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#phone").mask("+7 (999) 99-99-999");
        });
    </script>
</body>

</html>