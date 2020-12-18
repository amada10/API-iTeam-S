<?php

require("connexion_bdd.php");

$pdo = getPDO();//connexion à la BDD

function obtenir_les_membres(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM membre");
    $membres = $query->fetchAll();
    return $membres;
}