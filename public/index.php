<?php
/*
 * Front Controller de la gestion du livre d'or
 */

/*
 * Chargement des dépendances
 */
// chargement de configuration
require_once "../config.php";
// chargement du modèle de la table countries
require_once "../model/paysModel.php";

/*
 * Connexion à la base de données en utilisant PDO
 * Avec un try catch pour gérer les erreurs de connexion
 */
try {
    //
   $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" .DB_NAME . "; charset=" . DB_CHARSET . ";port=" . DB_PORT , DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

/*
 * On récupère les messages du livre d'or
 */

// on appelle la fonction de récupération de la DB (getAllLivreOr())
$countries = getAllCountries($db);

// fermeture de la connexion
$db = null;

// Appel de la vue

include "../view/paysView.php";