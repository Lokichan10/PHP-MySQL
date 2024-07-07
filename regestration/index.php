<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #F5F5F5;
        }
    </style>
</head>
<body>
<div style="margin-left: 540px;">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Main</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
        </li>
    </ul>
</div>

<div style="margin-left: 580px; margin-top: 200px;">
    <h3 style="margin-left: 30px;">Отправить форму</h3>
    <form action="server.php" method="post">
        <input type="text" name="username" placeholder="Введите имя" class="form-control" style="width: 300px; margin-top: 20px;">
        <input type="email" name="email" placeholder="Введите email" class="form-control" style="width: 300px; margin-top: 10px;">
        <input type="password" name="password" placeholder="Введите пароль" class="form-control" style="width: 300px; margin-top: 10px;">
        <input type="submit" value="Отправить" class="btn btn-dark" style="width: 225px; margin-left: 35px; margin-top: 20px;">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
