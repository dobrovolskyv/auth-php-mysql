<?php

require_once __DIR__ . '/helpers.php';

//получение инпутов
$login = $_POST['login'];
$password = $_POST['password'];

//запись в БД

$connect = getDB();
$sql = "INSERT INTO `users` (login,password) VALUES ('$login', '$password')";

if ($connect->query($sql) === TRUE) {
    // echo "Регистрация прошла успешно";
    header('Location: ../profile.php');
} else {
    echo "Данный пользователь уже существует";
}
