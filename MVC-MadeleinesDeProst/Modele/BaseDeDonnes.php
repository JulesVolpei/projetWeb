<?php
    class BaseDeDonnes {
        private static $bdLink;

        // Singleton
        public static function connexion() {
            if (self::$bdLink == null) {
                self::$bdLink = mysqli_connect("mysql-madeleinedeprost.alwaysdata.net","295287","Madeleine!13Prost") or die('Erreur de connexion au serveur 0 : ' . mysqli_connect_error());
                mysqli_select_db(self::$bdLink, 'madeleinedeprost_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error(self::$bdLink));
            }
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
            $query = 'SELECT RECETTE.ID
                      FROM RECETTE, RECETTE_PARTICULARITE, PARTICULARITE
                      WHERE RECETTE_PARTICULARITE.ID_RECETTE = RECETTE.ID AND RECETTE_PARTICULARITE.ID_PARTICULARITE = PARTICULARITE.ID';
            $resultatIDRecettesAvecUneParticularite = mysqli_query(self::connexion(), $query);

            $troisParticularites = array();

            while (count($troisParticularites) < 3) {
                array_push($troisParticularites, "Pas de particularité");
            }
            return $troisParticularites;
        }

    }