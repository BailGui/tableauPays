<?php
/*
 * Model de la page livre d'or
 */

/**
 * @param PDO $db
 * @return array
 * Fonction qui récupère tous les messages du livre d'or par ordre de date croissante
 * venant de la base de données 'ti2web2024' et de la table 'livreor'
 */
function getAllCountries(PDO $db): array
{
   /* définir la requête SQL permettant de récupérer tous les pays de la liste */
   $sql = "SELECT * FROM countries ORDER BY nom ASC";
   /*exécuter cette requête et la stocker dans une variable (tableau) */
   $query = $db->query($sql);
   /* parcourir le tableau de résultat récupérés $query */
   $result = $query->fetchAll(PDO::FETCH_ASSOC);

   $query->closeCursor();

   return $result;
}

function getAllCountriesAndFlags(PDO $db):array
{
   /* définir la requête SQL permettant de récupérer tous les pays de la liste */
   $sql = "SELECT countries.nom, countries.iso, flags.url FROM countries, flags WHERE countries.id=flags.id_pays ORDER BY countries.nom";
   /*exécuter cette requête et la stocker dans une variable (tableau) */
   $query = $db->query($sql);
   /* parcourir le tableau de résultat récupérés $query */
   $result = $query->fetchAll(PDO::FETCH_ASSOC);

   $query->closeCursor();

   return $result;
}


