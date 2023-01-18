<?php
    class BaseDeDonnes {
        private static $bdLink;

        // Singleton
        public static function connexion() {
            // Si la connexion à la base n'a jamais été faite
            if (self::$bdLink == null) {
                // On se connecte à la base
                self::$bdLink = mysqli_connect("mysql-madeleinedeprost.alwaysdata.net","295287","Madeleine!13Prost") or die('Erreur de connexion au serveur 0 : ' . mysqli_connect_error());
                mysqli_select_db(self::$bdLink, 'madeleinedeprost_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error(self::$bdLink));
            }
            // On renvoit la connexion
            return self::$bdLink;   
        }
        public static function donneLesRecettes() {
            $troisRecettes = array();
            if ($troisRecettes == null) {
                // Connexion base de données
                $bdLien = self::connexion();
                // Requête
                $query = "SELECT * FROM RECETTE ORDER BY RAND() LIMIT 3";
                $resultat = mysqli_query($bdLien, $query);
                // On parcourt le résultat de notre requête
                while ($row = mysqli_fetch_assoc($resultat)) {
                    // On ajoute une recette à notre tableau
                    array_push($troisRecettes, $row);
                }
            }
            return $troisRecettes;
        }
        public static function troisNomsRecettes($troisRecettes) {
            $troisNom = array();
            foreach ($troisRecettes as $nomRecette) {
                array_push($troisNom, $nomRecette["NOM"]);
            }
            return $troisNom;
        }
        public static function troisDifficultesRecettes($troisRecettes) {
            $troisDifficultes = array();
            foreach ($troisRecettes as $difficulteRecette) {
                array_push($troisDifficultes, $difficulteRecette["DIFFICULTE"]);
            }
            return $troisDifficultes;
        }
        public static function troisCoutsRecettes($troisRecettes) {
            $troisCouts = array();
            foreach ($troisRecettes as $coutRecette) {
                array_push($troisCouts, $coutRecette["COUT"]);
            }
            return $troisCouts;
        }
        public static function troisParticularitesRecettes($troisRecettes) {
            // On prend toutes les particularités des recettes
            $query = 'SELECT PARTICULARITE.NOM, RECETTE.ID
                      FROM RECETTE, RECETTE_PARTICULARITE, PARTICULARITE
                      WHERE RECETTE_PARTICULARITE.ID_RECETTE = RECETTE.ID AND RECETTE_PARTICULARITE.ID_PARTICULARITE = PARTICULARITE.ID';
            // On exécute la requête
            $resultatIDRecettesAvecUneParticularite = mysqli_query(self::connexion(), $query);
            $troisParticularites = array();
            // On parcourt l'ensemble des particularités
            foreach ($resultatIDRecettesAvecUneParticularite as $particularite) {
                // On parcourt nos trois recettes
                foreach ($troisRecettes as $recette) {
                    // Si l'id d'une des recettes correspond à la colonne ID dans notre résultat de requête
                    if ($recette["ID"] == $particularite["ID"]) {
                        // La recette a une particularité et il faut l'ajouter
                        array_push($troisParticularites, $particularite["NOM"]);
                    }
                }
            }
            // Pour les recettes n'ayant pas de particularités
            while (count($troisParticularites) < 3) {
                array_push($troisParticularites, "Pas de particularité");
            }
            return $troisParticularites;
        }
    }