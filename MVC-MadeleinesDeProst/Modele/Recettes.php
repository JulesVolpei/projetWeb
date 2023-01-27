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

        public function donneToutesLesRecettes() {
            $toutesLesRecettes = array();
            $resultat = mysqli_query(BaseDeDonnes::connexion(), "SELECT * FROM RECETTE");
            while ($row = mysqli_fetch_assoc($resultat)) {
                array_push($toutesLesRecettes, $row);
            }
            return $resultat;
        }

        public function donneIngrédientRecette($idRecette) {
            $toutLesIngredients = array();
            $resultat = mysqli_query(BaseDeDonnes::connexion(), "SELECT INGREDIENTS FROM RECETTE WHERE RECETTE.ID = " . $idRecette);
            $ingredient = "";
            $cmpt = 1;
            while ($row = mysqli_fetch_assoc($resultat)) {
                foreach ($row as $totalIngredient) {
                    foreach (str_split($totalIngredient) as $lettreIngredient) {
                        if ($lettreIngredient == ',') {
                            array_push($toutLesIngredients, $ingredient);
                            $ingredient = "";
                        } else {
                            $ingredient .= $lettreIngredient;
                        }
                    }
                    $ingredient = "";
                }
            }
            return $toutLesIngredients;
        }

        public function donnePreparationRecette($idRecette) {
            $preparation = array();
            $resultat = mysqli_query(BaseDeDonnes::connexion(), "SELECT ETAPES FROM RECETTE WHERE RECETTE.ID = " . $idRecette);
            while ($row  = mysqli_fetch_assoc($resultat)) {
                foreach ($row as $partiePreparation) {
                    $str = explode("Etape", $partiePreparation);
                    foreach ($str as $etape) {
                        array_push($preparation, $etape);
                    }
                }
            }
            return $preparation;
        }

    }