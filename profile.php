<?php
session_start();

require_once __DIR__ . '/src/helpers.php';

$connect = getDB();

$idUser = $_SESSION['user']['id'];

$sql = "SELECT * FROM `users` WHERE `id` = ('$idUser')";

if ($idUser == ''){
    header('Location: ../login.html');
    exit();
}

$result = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($result );

$login;

foreach ($result as $item) {
    $login = $item[1];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>PROFILE PAGE <?= $login; ?></h1>
    </div>
</body>

</html>