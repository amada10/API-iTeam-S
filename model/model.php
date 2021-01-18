<?php

require("connexion_bdd.php");

$pdo = getPDO();//connexion à la BDD

function obtenir_les_membres(){
    global $pdo;
    $query = $pdo->query("CALL `membres`()");
    $membres = $query->fetchAll();
    return $membres;
}

function obtenir_one_membre($id){
    global $pdo;
    $query = $pdo->query("CALL `one_membre`('$id')");
    $membre = $query->fetch();
    return $membre;
}