<?php
require_once("model/model.php");

function home(){
    require_once("view/home.php");
}

function liste_membres(){
    $liste_membres = obtenir_les_membres();
    $liste_membres_json = json_encode($liste_membres);
    header('location:view/home.php?liste_membres='.$liste_membres_json);
}