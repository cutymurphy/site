<?php

session_start();

include "path.php";

unset($_SESSION['id']);
unset($_SESSION['username']);

header('location: ' . BASE_URL . 'main.php');