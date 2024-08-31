<?php

namespace php;

require_once "vendor/autoload.php";
use php\cycle;
class registr
{
    $cycle = new cycle();
}
$login = $_GET['login'];
$pass = $_GET['pass'];
$repeatprasssword = $_GET['repeatprasssword'];
$email = $_GET['email'];
if (empty($login) || empty($pass) || empty($repeatprasssword) || empty($email)) {
    echo "Заполнить все поля";
} else {
    if ($pass != $repeatprasssword) {
        echo "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO users (login, pass, email) VALUES ('$login', '$pass', '$email')";
        if ($cycle->query($sql) === TRUE) {
            echo "Успешная регистрация";
        } else {
            echo "Ошибка: " . $sql . "<br>" . $conn->error;
        }
    }
}
