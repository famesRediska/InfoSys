<?php
if(empty($_POST))
    exit();
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    include 'db.php';
    $query = "INSERT INTO `infosys`(`login`,`email`,`password`) VALUES ('$login','$email','$password')";
    $link->query($query) or die($link->error);
    $link->close();
    header("Location: /login.php")
?>