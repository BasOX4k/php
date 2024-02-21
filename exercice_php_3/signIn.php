<?php

include './User.php';
include './Db.php';


if (
    !empty($_POST)
    && isset($_POST['username'])
    && isset($_POST['passwrod'])

)   


{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($password === $passwordConfirm) {
        $username = htmlspecialchars($username);
        $password = htmlspecialchars($password);
    }

    $verifyPassword = password_verify('password', $hash);
    $newDbConnection = new Db('./db.csv');
}
    ?>