<?php

require_once __DIR__ . '/helpers.php';

session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$idUser = $_SESSION['user']['id'];

if ($idUser == '') {
    header("Location: /");
} else {
    $connect = getDB();
    $sql = "UPDATE `users` SET `password` = ('$password'), `login`=('$login') WHERE `users`.`id` = ('$idUser')";

    if ($connect->query($sql) === TRUE) {
        header('Location: ../profile.php');
    } else {
        echo "произошла ошибка";
    }
}


