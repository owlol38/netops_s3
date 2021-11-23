<?php
session_start();

$page = $_SERVER['REQUEST_URI'];

switch ($page) {
    case 'login':
        header("Location: ./Controller/function_login.php");
        break;

    case 'home':
        header("Location: ./Controller/function_home.php");
        break;
    
    default:
        header("Location: ./Controller/function_login.php");
        break;
}
?>