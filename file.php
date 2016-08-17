<?php

$user = 'username';
$pass = 'password';
$ok = 'OK';

$name = isset($_POST['username']) ? $_POST['username'] : '';
$pwd = isset($_POST['password']) ? $_POST['password'] : '';

    if ($name == $user || $pwd == $pass) {
        echo json_encode($ok);
    } else {
        echo 'wrong words';
    }


