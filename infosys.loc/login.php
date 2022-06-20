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
    <title>Вход</title>
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
        <form action="actions/loginaction.php" method="POST" id="regform">
            <br>
            <h2>Вход</h2>
            <br>
            <p>Введите логин</p>
            <input type="text" placeholder="Логин" name="login" class="validate" required id="login">
            <p>Введите пароль</p>
            <input type="password" placeholder="Пароль" name="password" class="validate" required id="password">
            <br><br>
            <button>Войти</button>
            <br><br>
        </form>
    </div>
</body>

</html>