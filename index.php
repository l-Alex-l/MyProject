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
                    <li><a href="inner.php">Программа обучения</a></li>
                    <li><a href="#">Выпускники</a></li>
                    <li><a href="#">Как поступить</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="pages/enter.php">Вход</a></li>
                </ul>
            </nav>
        </div>
        <div class="promo">
            <div class="promo-title">Учеба еще никогда не была такой интересной!</div>
            <p>Обучаем готовых к трудоустройству специалистов на теоретических и практических курсах.</p>
            <a href="pages/registration.php" class="btn btn-green">Подать заявку</a>
        </div>
    </div>
</header>

<main>
    <section class="features">
        <div class="container">
            <div class="features-item">
                <div class="features-icon features-icon-schedule"></div>
                <h2 class="features-title">Гибкий график обучения</h2>
                <p>Современный темп жизни требует гибкого подхода к расписанию.</p>
            </div>
            <div class="features-item">
                <div class="features-icon features-icon-practice"></div>
                <h2 class="features-title">Практические занятия</h2>
                <p>На одной теории далеко не уедешь поэтому мы обучаем на практике.</p>
            </div>
            <div class="features-item">
                <div class="features-icon features-icon-work"></div>
                <h2 class="features-title">Не оставим без работы</h2>
                <p>Хорошие специалисты всегда в цене и Вы станете именно таким.</p>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <h2 class="feedback-title">Отзывы выпускников</h2>
            <a href="#" class="feedback-all">Показать все</a>
            <div class="feedback-item">
                <div class="feedback-author">
                    <img src="img/user.jpg" width="133" height="133" alt="Иванов Петр">
                    <h3>Иванов Иван Иванович</h3>
                    <p>Группа: A-B-C<br> Выпуск: 2019 г.</p>
                </div>
                <blockquote class="feedback-content">
                    <h3>Тяжело в учении, легко в бою!</h3>
                    <p>Во время обучения было очень тяжело, практические занятия требовали усидчивости и гибкости ума.
                        Однако, по прошествии времени, понял, что все это было не зря! Устроился в ведущую студию
                        своего города сразу после выпуска, а проработав там три года основал свою собственную!</p>
                </blockquote>
            </div>
        </div>
    </section>

    <?php
        /*session_start();
        if(isset($_POST["send"])) {
            $from = htmlspecialchars($_POST["e-mail"]);
            $username = htmlspecialchars($_POST["fullname"]);
            $age = htmlspecialchars($_POST["age"]);
            $sex = htmlspecialchars($_POST["sex"]);
            $message = htmlspecialchars($_POST["message"]);
            $_SESSION["from"] = $from;
            $_SESSION["username"] = $username;
            $_SESSION["age"] = $age;
            $_SESSION["message"] = $message;
        }*/

    ?>


    <section class="contacts">
        <div class="container">
            <h2 class="contacts-title">Обратная связь</h2>
            <form class="contacts-form" action="" method="post">
                <table>
                    <tr>
                        <td class="title">
                            <label for="e-mail-id">E-mail:</label>
                        </td>
                        <td class="field">
                            <input type="text" name="e-mail" id="e-mail-id" placeholder="Введите вашу почту"
                                   value="<?=$_SESSION["from"]?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">
                            <label for="fullname-id">ФИО:</label>
                        </td>
                        <td class="field">
                            <input type="text" id="fullname-id" name="fullname" placeholder="Представьтесь, пожалуйста"
                                   value="<?=$_SESSION["username"]?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">
                            <label for="age-id">Возраст:</label>
                        </td>
                        <td class="field">
                            <input type="text" id="age-id" name="age" placeholder="Укажите возраст, хотя бы приблизительно"
                                   value="<?=$_SESSION["age"]?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Пол:</td>
                        <td class="field">
                            <label><input type="radio" id="man-id" name="sex" value="man" checked> Мужской</label>
                            <label><input type="radio" id="woman-id" name="sex" value="woman"> Женский</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">
                            <label for="message-id">Вопрос:</label>
                        </td>
                        <td class="field">
                            <textarea id="message-id" name="message" placeholder="Сообщите все, что считаете нужным" required>
                                <?=$_SESSION["message"]?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="title"></td>
                        <td class="field">
                            <input type="submit" name="send" class="btn btn-green" value="Отправить">
                        </td>
                    </tr>
                </table>
            </form>
            <div class="contacts-instruction">
                <h3>Заинтересовались обучением на нашей кафедре?</h3>
                <p>Заполните короткую форму обратной связи и отправьте нам.</p>
                <p>Мы подготовим для вас индивидуальное предложение и выйдем на связь!</p>
                <p class="contacts-alert"><strong>Внимание!</strong> Все поля обязательны для заполнения.</p>
            </div>
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
