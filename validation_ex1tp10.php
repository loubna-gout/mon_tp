<?php
require 'config_ex1tp10.php';

if(isset($_POST['login']) && isset($_POST['pass'])) {
    if(empty($_POST['login']) || empty($_POST['pass'])) {
        header('Location: login_ex1tp10.php?error=1');
        exit();
    }
    
    if($_POST['login'] == USERLOGIN && $_POST['pass'] == USERPASS) {
        $_SESSION['CONNECT'] = 'OK';
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pass'] = $_POST['pass'];
        header('Location: accueil_ex1tp10.php');
        exit();
    } else {
        header('Location: login_ex1tp10.php?error=2');
        exit();
    }
} elseif(isset($_GET['afaire']) && $_GET['afaire'] == 'deconnexion') {
    session_destroy();
    header('Location: login_ex1tp10.php?error=3');
    exit();
} else {
    header('Location: login_ex1tp10.php?error=1');
    exit();
}
?>