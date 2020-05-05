<?php
/**
 * Nom du projet  : TPIGarcia
 * Nom du fichier : functions.php
 * Auteur         : Diogo CANAS ALMEIDA
 * Date           : 05 mai 2020
 * Version        : 1.0
 * Description    : Fichier de fonctions
 */

 define("SERVERNAME", "localhost");
 define("DBNAME", "tpigarcia");
 define("USERNAME", "admin");
 define("PASSWORD", "Super2012");

/**
 * @brief   Fonction qui connecte à la base de données
 * @return  Retourne l'objet PDO
 */
 function connectToDB() {
     try {
         $db = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
         return $db;
     } catch (PDOException $e) {
         echo "Erreur : " . $e->getMessage();
     }
 }