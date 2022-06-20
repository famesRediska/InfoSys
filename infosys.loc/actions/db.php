<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "infosys";
$link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
if($link->connect_errno)
{
    echo "Ошибка при подключении БД: $link->connect_error";
}
?>