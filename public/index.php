<?php
// index.php
session_start();

// If user is logged in, retrieve identity from session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>my site</title>
        <link rel="icon" type="image/png" sizes="16x14" href="image/123.png"> <!==https://favicon.io/favicon-converter/==>
    </head>
    <body bgcolor="#fa8e47">
        <h1 align="center">Стартовая страница...</h1>
        <?php if ($identity==null): ?>
        <a href="login.php" >Sign in</a>
        <?php else: ?>
        <strong>Welcome, <?= $identity ?></strong> <a href="logout.php">Sign out</a>
        <?php endif; ?>
        <p>
            Это простой веб-сайт, демонстрирующий преимущества PHP-фреймворка и недостатки «чистого» PHP.
       <form name="test" method="post" action="login.php">
        <p><b>Ваше имя:</b><br>
        </p>
        <input type="text" size="40" name="nick"autofocus>
        </p>
        <p><b>Вы первый раз на этой странице?</b><br>
        <p><select>
                <optgroup label="Ваш ответ">
                    <option value="c1">Первый</option>
                    <option value="c2">Не первый</option>
            </select></p>
        </p>
        <p>Комментарий<br>
            <textarea name="comment" cols="40" rows="3"></textarea></p>
            <p><input type="submit" value="Отправить">
            <button><img src="image/batton stop.png"
                         width="14" alt="кнопка стоп"
                         style="vertical-align: middle"> Кнопка с рисунком стоп</button></p>
            <div>
            <img src="image/kat.jpg" width="1480" height="846" alt="Навигация по сайту"
                     usemap="#Navigation"></div>
            <p><map name="Navigation"> <!==https://www.image-map.net/==>
                    <area coords="73,790,414,711" shape="rect" href="login.php" alt="Логин" target="_blank">
                    <area coords="1066,715,1418,805" shape="rect" href="https://www.youtube.com/" alt="Youtube" target ="_blanc">
                </map></p>
            <video width="480" height="364" controls poster="video/123.mp4">
                <source src="video/123.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>
    </body>

    </body>
</html>

</form>

    </body>
</html>