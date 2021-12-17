<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$q = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login'");
$r = mysqli_fetch_array($q);

if (empty($login)) {
    $_SESSION['message'] = 'Поле "Логин" не заполнено';
    header('Location: ../registration.php');
}
if (empty($password)){
    $_SESSION['message'] = 'Поле "Пароль" не заполнено';
    header('Location: ../registration.php');
}
if($r) {
    $_SESSION['message'] = 'Пользователь с таким логином уже зарегистрирован';
    header('Location: ../registration.php');
}
if ($password !== $password_confirm){
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registration.php');
}

if ($password === $password_confirm && !$r && !empty($login) && !empty($password)) {
    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../authorization.php');
}
?>