<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/Zeichen_Info.png">
    <title>Регистрация</title>
</head>

<body>
    <div class="headercont">

        <a href="/index.php">
            <img class="logo" src="img/Zeichen_Info.png" alt="logo">
        </a>

        <h2 id="navzag">Информационная система</h2>
        
        <div class="nav">
            <p>
                <a class="navtext" href="login.php">Вход</a>
            </p>

            <p>
                <a class="navtext" href="register.php">Регистрация</a>
            </p>

        </div>
    </div>

    <div class="forma">
        <form action="actions/registeraction.php" method="POST" id="regform">
            <br>
            <h2>Регистрация</h2>
            <br>
            <p>Введите логин</p>
            <input type="text" name="login" placeholder="Логин" id="login" required class="validate">

            <p>Введите почту</p>
            <input type="email" name="email" placeholder="Почта" id="email" required class="validate">

            <p>Введите пароль</p>
            <input type="password" name="password" placeholder="Пароль" id="password" required class="validate">

            <p>Подтвердите обработку персональных данных:
                <label><input id="pd" type="checkbox" required> </label>
            </p>
            <br>
            <button>Зарегистрироваться</button>
            <br><br>
        </form>
    </div>
</body>

</html>