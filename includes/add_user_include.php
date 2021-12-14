<?php
include_once "users_functions.php";

if(isset($_POST) && $_POST !== []) {
    addUser($_POST);
}

