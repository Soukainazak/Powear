
<?php

include_once "products_functions.php";
include_once "panier_functions.php";
if(isset($_GET["id"])){
    $product = getProduct($_GET['id']);
}
if(isset($_GET["qtt"])){
    $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
    if(!$pageWasRefreshed)
    ajouterArticle($product["titre"],$_GET['qtt'],$product["price"],$product["imageurl"],$_GET['id']); 
}
 
?>