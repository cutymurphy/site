<?php
include "app/database/db.php";

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin = 0;
    $username = trim($_POST['name']);
    $email = trim($_POST['email']);
    $passwordFirst = trim($_POST['password']);
    $passwordRepeat = trim($_POST['password-repeat']);

    if ($passwordFirst !== $passwordRepeat) {
        $errorMessage = "Пароли не совпадают";
    } elseif (mb_strlen($username, 'UTF-8') < 2) {
        $errorMessage = "Слишком короткий ник";
    } elseif (mb_strlen($username, 'UTF-8') > 12) {
        $errorMessage = "Слишком длинный ник, используйте не более 12 символов";
    } else {
        $existence = selectOne('user', ['email' => $email]);
        if ($existence['email'] === $email) {
            $errorMessage = "Пользователь с такой почтой уже существует";
        } else {
            //$password = password_hash($passwordFirst, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $username,
                'email' => $email,
                'password' => $passwordFirst
            ];

            $id = insert('user', $post);

            $_SESSION['id'] = $existence['id'];
            $_SESSION['username'] = $existence['username'];
            header('location: ' . BASE_URL . 'login.php');
        }
    }
} else {
    $username = '';
    $email = '';
}