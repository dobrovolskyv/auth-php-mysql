<?php
session_start();

require_once __DIR__ . '/src/helpers.php';

$connect = getDB();

$idUser = $_SESSION['user']['id'];

$sql = "SELECT * FROM `users` WHERE `id` = ('$idUser')";

if ($idUser == '') {
    header('Location: ../login.html');
    exit();
}

$result = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($result);

$login;
$password;

foreach ($result as $item) {
    $login = $item[1];
    $password = $item[2];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>PROFILE PAGE <?= $login; ?></h1>

        <a class="btn" href="src/logout.php">Выход</a>
    </div>

    <div class="container">
        <h2>Изменить данные профиля</h2>

        <form action="src/editPassword.php" method="POST">
            <span>Логин</span>
            <input name="login" type="text" value="<?= $login ?>">

            <span>Пароль</span>
            <input name="password" type="text" value="<?= $password ?>">

            <button type="submit">Сохранить данные</button>

            <a class="btn" href="src/deleteAccount.php" type="submit">Удалить аккаунт</a>
        </form>





    </div>
</body>

</html>