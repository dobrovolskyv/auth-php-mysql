<?php

session_start();

require_once __DIR__ . '/helpers.php';

$login = $_POST['login'];
$password = $_POST['password'];

$connect = getDB();

$sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";

$result = $connect ->query($sql);

if ($result -> num_rows >0){
    while($row = $result ->fetch_assoc()){
        $_SESSION['user']['id'] = $row['id'];

        header('Location: ../profile.php');
    }
} else {
    echo "Неверный логин или пароль";
}