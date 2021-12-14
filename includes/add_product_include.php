<?php

include_once "products_functions.php";

if(isset($_POST) && $_POST !== []) {
    addProduct($_POST);
}