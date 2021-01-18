<?php
require_once("model/model.php");

function home(){
    require_once("view/home.php");
}

function liste_membres(){
    $liste_membres = obtenir_les_membres();
    $liste_membres_json = json_encode($liste_membres);
    echo $liste_membres_json;
}

function one_membre($id){
    $one_membre = obtenir_one_membre($id);
    $one_membre_json = json_encode($one_membre);
    echo $one_membre_json;
}