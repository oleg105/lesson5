<?php

require 'functions.php';

$first_name = '';
$last_name = '';
$email = '';
$password = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $parameters = ['first_name', 'last_name', 'email', 'password'];
    foreach ($parameters as $parameter) {
        if (empty($_POST[$parameter])) {
            die('element not found');
        }
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (saveUser($first_name, $last_name, $email, $password)) {
        $message = 'Пользователь зарегистрирован!';
    }
    else {
        $message = 'Ошибка при регистрации пользователя.';
    }

}
include 'form.tpl.php';
