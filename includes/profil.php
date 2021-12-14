<?php
if(isset($_POST) && $_POST !== []) {
    if($_POST['email']){
        $_SESSION['email'] = $_POST['email'];
    }
    if($_POST['password']) {
        $_SESSION['password'] = $_POST['password'];
    }
}