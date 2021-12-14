<?php
include_once "database.php";

function addUser(array $userDatas) {
    $bdd = connexion();
    $columns = "(";
    $values = "(";

    foreach($userDatas as $columnName => $osef) {
        $columns .= $columnName . ", ";
        $values .= ":" . $columnName . ", ";
    }

    $columns = substr($columns, 0, -2) . ")";
    $values = substr($values, 0, -2) . ")";

    $userDatas['password'] = password_hash($userDatas['password'], PASSWORD_BCRYPT);

    $query = $bdd->prepare("INSERT INTO users " . $columns . " VALUES " . $values);
    $return = $query->execute($userDatas) or die(print_r($bdd->errorInfo()));

    return $return;
}

function getUsers() {
    $bdd = connexion();
    $query = $bdd->query("SELECT * FROM users");

    return $query->fetchAll();
}

function getUser($userId) {
    $bdd = connexion();
    $query = $bdd->prepare("SELECT * FROM users WHERE id=:id");

    $response = $query->execute([ 'id' => $userId]) or die(print_r($bdd->errorInfo()));

    return $query->fetch();
}

function updateUser(int $id, array $userDatas) {
    $bdd = connexion();
    $datas = '';

    foreach($userDatas as $nomColumn => $valueColumn) {
        if(($nomColumn !== 'password' && $nomColumn !== 'id') ||
            ($nomColumn === 'password' && $valueColumn !== '')) {
            $datas .= $nomColumn . "=:" . $nomColumn . ", ";
            $arrayDatas[$nomColumn] = $valueColumn;
        }
    }

    if(isset($arrayDatas['password'])) {
        $arrayDatas['password'] = password_hash($arrayDatas['password'], PASSWORD_BCRYPT);
    }

    $datas = substr($datas, 0, -2);

    $query = $bdd->prepare('UPDATE users SET ' . $datas . ' WHERE id=' . $id);

    $response = $query->execute($arrayDatas) or die(print_r($bdd->errorInfo()));

    return $response;
}


function deleteUser(int $id) {
    $bdd = connexion();
    $query = $bdd->prepare('DELETE FROM users WHERE id=:id');

    $response = $query->execute(['id' => $id]);
}

function getUserByEmail($userEmail) {
    $bdd = connexion();
    $query = $bdd->prepare("SELECT * FROM users WHERE email=:email");

    $response = $query->execute([ 'email' => $userEmail]) or die(print_r($bdd->errorInfo()));

    return $query->fetch();
}






