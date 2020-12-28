<?php
require_once("model/model.php");

function home(){
    require_once("view/home.php");
}

function liste_membres(){	
    header('Content-type: application/json; charset=utf-8');
    echo json_encode(obtenir_les_membres());
}