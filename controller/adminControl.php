<?php
var_dump($_POST);
session_start();

unset($_SESSION['french']);
unset($_SESSION['italy']);
unset($_SESSION['swiss']);
foreach($_POST as $key => $value){
    if($value === "on"){
        $_SESSION[$key] = "on";
        
    }
}
var_dump($_SESSION['french']);
header('Location: ../admin.php');