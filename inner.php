<?php
    if ($_COOKIE['authUser'] == ""){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>A+</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>

<header class="main-header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.png" width="182" height="82" alt="A+">
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
        <div class="promo-inner">
            <div class="promo-title">Программа обучения</div>
            <p>SAMPLE TEXT - sample text</p>
        </div>
    </div>
</header>

<main>
    <p>Привет, <?=$_COOKIE['authUser']?>! Выйти: *клик*</p>
    <section>
        <h2 class="padding-right">1 ПРЕДМЕТЫ</h2>
        <div>
            <h2>Краткий список предметов</h2>
            <p>Занятия в нашей школе включают сбалансированный набор теории и практики по
                основным востребованным направлениям. Вот краткий список тем, которые студенты
                проходят на наших занятия</p>
        </div>
    </section>
    <section>
        <h2 class="padding-right">2 РАСПИСАНИЕ</h2>
        <div>
        <h2>Индивидуальное расписание</h2>
        <p>Занятия проводятся по собственной четырехдневной системе обучения,
            непривычной по классическим ВУЗам. Мы с пониманием относимся к высокой
            занятости своих студентов, ведь многие из них совмещают учебу с работой, поэтому</p>
        </div>
    </section>
</main>

<footer class="main-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-address">
                <div class="logo">
                    <img src="img/logo-footer.png" width="180" height="81" alt="A+">
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

<script type="text/javascript" src="scripts/jquery-3.5.1.js"></script>
<script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>