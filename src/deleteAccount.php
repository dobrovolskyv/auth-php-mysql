<?php
require_once __DIR__ . '/helpers.php';

session_start();

$idUser = $_SESSION['user']['id'];

if ($idUser == '') {
    header('Location: ../index.html');
} else {
    $connect = getDB();
    $sql = "DELETE FROM `users` WHERE `users`.`id` = ('$idUser')";

    if ($connect->query($sql)) {
        header('Location: ../index.html');
    } else {
        echo "невозможно удалить аккаунт";
    }
}