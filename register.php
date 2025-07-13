<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>

    <main>
        <div class="container">
            <div class="login__wrapper">
                <h2>Регистрация</h2>

                <form action="./src/register.php" method="POST">
                 
                    <input type="text" placeholder="Логин" name="login">

    
                    <input type="password" placeholder="Пароль" name="password">

                    <button type="submit">зарегистрироваться</button>
                </form>
            </div>

        </div>

    </main>



</body>