<?php
include "app/database/db.php";

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $username = trim($_POST['username']);

    $existence = selectOne('user', ['email' => $email, 'password' => $password]);
    if ($existence['email'] === $email && $existence['password'] === $password) {
        $name = $existence['username'];

        $id = $existence['id'];
        $user = selectOne('user', ['id' => $id]);

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        header('location: ' . BASE_URL . 'main.php');
    } else {
        $errorMessage = "Пользователя с такими почтой или паролем не существует";
    }

} else {
    $username = '';
    $email = '';
}