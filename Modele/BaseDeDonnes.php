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
    }