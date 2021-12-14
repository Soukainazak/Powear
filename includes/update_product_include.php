<?php
$product = null;

include_once "products_functions.php";

if(isset($_POST) && $_POST !== []) {
    updateProduct($_POST["id"], $_POST);
    $product = getProduct($_POST['id']);
}

if(isset($_GET) && $_GET !== []) {
    $product = getProduct($_GET['id']);
}