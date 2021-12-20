<?php
session_start();
require_once 'connect.php';
$db_con = new connect();
$connect = $db_con->db_connect();
$login = $_POST['login'];
$password = md5($_POST['password']);
$check_user = mysqli_query($connect, "SELECT * FROM users WHERE login='$login' AND password='$password'");
if (mysqli_num_rows($check_user) > 0 ){

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login']
    ];
    header('Location: ../account.php');

} else{
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../authorization.php');
}
?>