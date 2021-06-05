<?php
    if (isset($_POST['submit'])) {
        $login = filter_var(trim($_POST['e-mail']), FILTER_SANITIZE_STRING);
        $password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));

        $mysql = new mysqli('127.0.0.1', 'root', 'root', 'myproject');

        $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        $user = $result->fetch_assoc();
        if (count($user) == 0) {
            echo "Неверный логин или пароль";
            exit();
        }

        if (isset($_POST['remember'])) {
            setcookie('authUser', $user['name'], time() + 3600 * 24 * 7, "/");
        } else {
            setcookie('authUser', $user['name'], time() + 3600, "/");
        }

        $mysql->close();

        header('Location: ../inner.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<title>Вход</title>
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
                
                <form action="" method="post">
                    <label for="e-mail-id">
                        E-mail <br>
                        <input type="text" class="reg-input" id="e-mail-id" name="e-mail"> <br>
                    </label>
                    <label for="password-id">
                        Пароль <br>
                        <input type="password" class="reg-input" id="password-id" name="password"><br>
                    </label>
                    <label for="remember-id">
                        Запомнить меня <input type="checkbox" id="remember-id" name="remember">
                    </label>
                    <div class="center">
                        <input type="submit" class="btn btn-green" id="submit-id" name="submit" value="Войти">
                    </div>
                </form>
            </div>
            <p class="reg-message">Нет аккаунта? <a href="registration.php" class="reg-link">Зарегестрируйся</a> сейчас!</p>
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
</body>
</html>