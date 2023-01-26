<?php
    class Recettes {
        private static $troisRecettes = array();


        public static function donneLesRecettes() {
            if (self::$troisRecettes == null) {
                // Connexion base de données
                // Requête
                $query = "SELECT * FROM RECETTE ORDER BY RAND() LIMIT 3";
                $resultat = mysqli_query(BaseDeDonnes::connexion(), $query);
                // On parcourt le résultat de notre requête
                while ($row = mysqli_fetch_assoc($resultat)) {
                    // On ajoute une recette à notre tableau
                    array_push(self::$troisRecettes, $row);
                }
            }
            return self::$troisRecettes;
        }
    }