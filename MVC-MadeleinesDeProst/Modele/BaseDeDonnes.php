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
    }