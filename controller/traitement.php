<?php
require_once("model/model.php");

function home(){
    require_once("view/home.php");
}

function liste_membres(){
    $liste_membres = obtenir_les_membres();
	
    header('Content-Type: application/json');
    echo json_encode($liste_membres);
}