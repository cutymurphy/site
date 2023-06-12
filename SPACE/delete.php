<?php

session_start();

include "path.php";
include "app/database/db.php";

$id = $_SESSION['id'];

unset($_SESSION['id']);
unset($_SESSION['username']);

delete('user', $id);

header('location: ' . BASE_URL . 'main.php');
