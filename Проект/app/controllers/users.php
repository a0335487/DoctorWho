<?php

include "app/database/db.php";

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];
    // tt($_SESSION);
    header('location: ' . BASE_URL . 'start-page.php');
}


//Код для регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-reg'])){
    $username =  trim($_POST['username']);
    $login = trim($_POST['username']) . time();
    $pass1 = trim($_POST['password_1']);
    $pass2 = trim($_POST['password_2']);

    // $agree = isset($_POST['checkbox']) ? 1 : 0;
    $pass = password_hash($pass1, PASSWORD_DEFAULT);
    $post = [
        'username' => $username,
        'password' => $pass,
        'login' => $login
                
    ];       
    $id = insert('users', $post);
    $user = selectOne('users', ['id' => $id]);
    userAuth($user);
}
else{
    $name =  '';
}


//Код для авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['log-btn'])){
    $login = trim($_POST['login']);
    $pass = trim($_POST['password']);
    $existence = selectOne('users', ['login' => $login]);
    if($existence && password_verify($pass, $existence['password'])){
        userAuth($existence);
    }else{
        $errMsg_log = "Почта либо пароль введены неверно!";
    }
}
