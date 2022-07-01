<?php

$host = "database";
$dbname = "poo"; // to adapt
$login = "user";
$mdp = "mdp";

/**
 * try connection
 * catch and display the error and stop process
 */
try{
    $db = new PDO(
        'mysql:host='.$host.';dbname='.$dbname.';charset=UTF8',
        $login,
        $mdp
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
    die('Erreur:'.$e->getMessage());
}
