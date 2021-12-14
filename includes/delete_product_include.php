<?php

include_once "products_functions.php";


if(isset($_POST) && $_POST !== []) {
    deleteProduct($_POST['id']);
}

$products = getProducts();
