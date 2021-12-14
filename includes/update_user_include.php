<?php
$user = null;

include_once "users_functions.php";

if(isset($_POST) && $_POST !== []) {
    updateUser($_POST["id"], $_POST);
    $user = getUser($_POST['id']);
}

if(isset($_GET) && $_GET !== []) {
    $user = getUser($_GET['id']);
}