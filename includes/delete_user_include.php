<?php

include_once "users_functions.php";


if(isset($_POST) && $_POST !== []) {
    deleteUser($_POST['id']);
}

$users = getusers();