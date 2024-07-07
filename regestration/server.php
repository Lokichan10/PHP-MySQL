<?php
// Получение данных от POST
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$md5pass = md5($pass);

// Проверка, что данные переданы
if (empty($name) || empty($email) || empty($pass)) {
    die("Введите все данные.");
}

// Подключение к базе данных
$mysqli = new mysqli("localhost", "root", "", "users");

// Проверка подключения
if ($mysqli->connect_errno) {
    die("Connect failed: " . $mysqli->connect_error);
}

// Подготовка SQL-запроса
$sql = "INSERT INTO `regestration-db` (`username`, `email`, `password`) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);

// Проверка подготовки запроса
if (!$stmt) {
    die("Prepare failed: " . $mysqli->error);
}

// Привязка параметров
$stmt->bind_param("sss", $name, $email, $md5pass);

// Выполнение запроса и проверка результата
if ($stmt->execute()) {
    echo "Данные успешно добавлены!";
} else {
    die("Execute failed: " . $stmt->error);
}

// Закрытие подготовленного выражения и соединения
$stmt->close();
$mysqli->close();
?>
