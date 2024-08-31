<?php
namespace php;

require_once "vendor/autoload.php";
use php\cycle;

class login
{
    $cycle = new cycle();
}

$login = $_GET['login'];
$pass = $_GET['pass'];
if (empty($login) || empty($pass)) {
    echo "Заполнить все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            header("Location: html.php");
            exit;
        }
    } else {
        echo "Нет такого пользователя";
    }
}
