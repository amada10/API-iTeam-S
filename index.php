<?php
require_once("controller/traitement.php"); //On appelle le controller.php pour qu'on puisse utiliser son fonction

try{
    if(isset($_GET["action"])){
        $action = htmlspecialchars($_GET["action"]);
        if($action == "liste_membres"){
            liste_membres();
        }
    }
    else{
        // tokony 404 page lesy ato @ntsoa2112 an #gaetan1903
        home();
    } 
}
catch (Exception $e){ //Si il y a une erreur, on affiche l'erreur
    echo "Erreur :".$e->getMessage();
}
