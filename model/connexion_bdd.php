<?php

function getPDO() {
    $pdo = new PDO('mysql:host=185.98.128.90;dbname=ITEAMS;charset=utf8','iteams','__iteam-s__',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    return $pdo;
}