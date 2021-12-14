<?php
require_once "database.php";

function addProduct(array $datasProduct) {
    $bdd = connexion();
    $columns = "(";
    $values = "(";

    foreach($datasProduct as $column => $columnValue) {
        $columns .= $column . ", ";
        $values .= ":" . $column . ", ";
    }


    $columns = substr($columns, 0, -2) . ")"; 
    $values = substr($values, 0, -2) . ")"; 
    $query = $bdd->prepare("INSERT INTO produit " . $columns . " VALUES " . $values);

    $response = $query->execute($datasProduct) or die(print_r($bdd->errorInfo()));

    return $response;
}

function getProducts() {
    $bdd = connexion();
    $query = $bdd->query("SELECT * FROM produit ORDER BY id");

    $response = $query->fetchAll();

    $query->closeCursor();

    return $response;
}


function getProductByCategorie(int $categorieId) {
    $bdd = connexion();
    $query = $bdd->prepare("SELECT * FROM produit WHERE categorieid=:categorie_id");

    $response = $query->execute(['categorie_id'=> $categorieId]) or die(print_r($bdd->errorInfo()));


    $response = $query->fetchAll();

    $query->closeCursor();

    return $response;
}



function getProduct(int $id) {
    $bdd = connexion();
    $query = $bdd->prepare("SELECT * FROM produit WHERE id=:id");

    $response = $query->execute(['id'=> $id]) or die(print_r($bdd->errorInfo()));

    $result = $query->fetch();

    $query->closeCursor();

    return $result;
}

function updateProduct(int $id, array $productDatas) {
    $bdd = connexion();
    $datas = '';

    foreach($productDatas as $nomColumn => $valueColumn) {
        if($nomColumn !== 'id') {
            $datas .= $nomColumn . "=:" . $nomColumn . ", ";
            $arrayDatas[$nomColumn] = $valueColumn; 
        }
    }

    $datas = substr($datas, 0, -2);

    $query = $bdd->prepare('UPDATE produit SET ' . $datas . ' WHERE id=' . $id);

    $response = $query->execute($arrayDatas) or die(print_r($bdd->errorInfo()));

    return $response;
}

function deleteProduct(int $id) {
    $bdd = connexion();
    $query = $bdd->prepare('DELETE FROM produit WHERE id=:id');

    $response = $query->execute(['id'=> $id]);

    return $response;
}
