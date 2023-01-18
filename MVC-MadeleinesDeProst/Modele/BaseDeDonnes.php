<?php
    final class BaseDeDonnes {
        private static $bdLink;
        private static $troisRecettes = array();

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
            if (self::$troisRecettes == null) {
                // Connexion base de données
                $bdLien = self::connexion();
                // Requête
                $query = "SELECT * FROM RECETTE ORDER BY RAND() LIMIT 3";
                $resultat = mysqli_query($bdLien, $query);
                // On parcourt le résultat de notre requête
                while ($row = mysqli_fetch_assoc($resultat)) {
                    // On ajoute une recette à notre tableau
                    array_push(self::$troisRecettes, $row);
                }
            }
            return self::$troisRecettes;
        }
    }