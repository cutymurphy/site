<?php
include "app/database/db.php";

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_SESSION['email'];
    $passwordOld = trim($_POST['old-password']);
    $passwordNew = trim($_POST['new-password']);

    $user = selectOne('user', ['email' => $email]);
    if ($user['password'] === $passwordOld) {

        $id = $user['id'];
        update('user', $id, ['password' => $passwordNew]);

        $errorMessage = "Успешно сменен пароль";
    } else {
        $errorMessage = "Неверно введен пароль";
    }

}
