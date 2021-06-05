<?php
    if (isset($_POST['submit'])) {
        $login = filter_var(trim($_POST['e-mail']), FILTER_SANITIZE_STRING);
        $password = filter_var(trim($_POST['password']),  FILTER_SANITIZE_STRING);
        $s_password = filter_var(trim($_POST['s-password']),  FILTER_SANITIZE_STRING);
        $name = filter_var(trim($_POST['user-name']), FILTER_SANITIZE_STRING);
        $surname = filter_var(trim($_POST['user-surname']), FILTER_SANITIZE_STRING);

        if ($password == $s_password) {
            $mysql = new mysqli('127.0.0.1', 'root', 'root', 'myproject');
            $mysql -> query("INSERT INTO `users` (`login`, `password`, `name`, `surname`)
                VALUES('$login', md5('$password'), '$name', '$surname')");
            $mysql ->close();
            header('Location: enter.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <title>Регестрация</title>
</head>
<body>
<header class="enter-header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="../index.php">
                    <img src="../img/logo.png" width="182" height="82" alt="A+">
                </a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="#">Программа обучения</a></li>
                    <li><a href="#">Выпускники</a></li>
                    <li><a href="#">Как поступить</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="reg-box">
            <span class="hidden" id="password-error">Пароли не совпадают</span>
            <form action="" method="post">
                <span class="hidden" id="e-mail-error">Такой e-mail не допустим</span>
                <label for="e-mail-id">
                    E-mail <br>
                    <input type="text" class="reg-input" id="e-mail-id" name="e-mail" required> <br>
                </label>
                <label for="user-name-id">
                    Имя <br>
                    <input type="text" class="reg-input" id="user-name-id" name="user-name" required><br>
                </label>
                <label for="user-surname-id">
                    Фамилия <br>
                    <input type="text" class="reg-input" id="user-surname-id" name="user-surname" required><br>
                </label>
                <label for="password-id">
                    Пароль <br>
                    <input type="password" class="reg-input" id="password-id" name="password" required><br>
                </label>
                <label for="s-password-id">
                    Повторите пароль <br>
                    <input type="password" class="reg-input" id="s-password-id" name="s-password" required><br>
                </label>
                <div class="center">
                    <input type="submit" class="btn btn-green" id="submit-id" name="submit" value="Зарегистрироваться"
                    onclick="checkInfo();">
                </div><br>
            </form>
        </div>
        <p class="reg-message">Уже есть аккаунт? Тогда <a href="enter.php" class="reg-link">Заходи!</a></p>
    </div>
</main>

<footer class="main-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-address">
                <div class="logo">
                    <img src="../img/logo-footer.png" width="180" height="81" alt="A+">
                </div>
                <p>197101, г. Санкт-Петербург,<br> пр. Кронверкский, д. 49</p>
            </div>
            <div class="footer-menu">
                <h3>Обучение</h3>
                <ul>
                    <li><a href="#">Расписание</a></li>
                    <li><a href="#">Предметы</a></li>
                    <li><a href="#">Практика</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3>Выпускники</h3>
                <ul>
                    <li><a href="#">Достижения</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Найти</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3>Как поступить</h3>
                <ul>
                    <li><a href="#">На коммерцию</a></li>
                    <li><a href="#">Целевой набор</a></li>
                    <li><a href="#">На бюджет</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3>Контакты</h3>
                <ul>
                    <li><a href="#">Обратная связь</a></li>
                    <li><a href="#">Схема проезда</a></li>
                    <li><a href="#">Телефон/факс</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copyright">Все права защищены © 2020</div>
            <div class="footer-social-promo">Подписчикам в соц.сетях — скидки на обучение!</div>
            <div class="footer-social">
                <a href="https://vk.com" class="social-btn" target="_blank"><i class="fa fa-vk"></i></a>
                <a href="https://www.facebook.com" class="social-btn" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com" class="social-btn" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="../scripts/jquery-3.5.1.js"></script>
<script type="text/javascript" src="../scripts/main.js"></script>

</body>
</html>