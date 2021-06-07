<?php
session_start();
include "idarray.php";

$login = $_POST['login'];
$passWord = $_POST['passWord'];

foreach($admin as $value){
    if($login === $value['login'] && $passWord === $value['password']){
        $_SESSION['login'] = "Jon";
        header('Location: /admin.php');
    }
    if(empty($_SESSION['login']) && empty($_SESSION['passWord'])){
        header('Location: /connection.php?error=');
    } 
}
