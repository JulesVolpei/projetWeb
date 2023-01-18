<?php
    class Recettes {

        public static function troisNomsRecettes() {
            $troisNom = array();
            foreach (BaseDeDonnes::donneLesRecettes() as $nomRecette) {
                array_push($troisNom, $nomRecette["NOM"]);
            }
            return $troisNom;
        }
        public static function troisDifficultesRecettes() {
            $troisDifficultes = array();
            foreach (BaseDeDonnes::donneLesRecettes() as $difficulteRecette) {
                array_push($troisDifficultes, $difficulteRecette["DIFFICULTE"]);
            }
            return $troisDifficultes;
        }
        public static function troisCoutsRecettes() {
            $troisCouts = array();
            foreach (BaseDeDonnes::donneLesRecettes() as $coutRecette) {
                array_push($troisCouts, $coutRecette["COUT"]);
            }
            return $troisCouts;
        }
        public static function troisParticularitesRecettes() {
            // On prend toutes les particularités des recettes
            $query = 'SELECT PARTICULARITE.NOM, RECETTE.ID
                      FROM RECETTE, RECETTE_PARTICULARITE, PARTICULARITE
                      WHERE RECETTE_PARTICULARITE.ID_RECETTE = RECETTE.ID AND RECETTE_PARTICULARITE.ID_PARTICULARITE = PARTICULARITE.ID';
            // On exécute la requête
            $resultatIDRecettesAvecUneParticularite = mysqli_query(BaseDeDonnes::connexion(), $query);
            $troisParticularites = array();
            $ajoute = false;
            // On parcourt nos recettes
            foreach (BaseDeDonnes::donneLesRecettes() as $recette) {
                // On parcourt nos particularités
                foreach ($resultatIDRecettesAvecUneParticularite as $particularite) {
                    // Si la recette a une particularité
                    if ($recette["ID"] == $particularite["ID"]) {
                        // On ajoute la particularité ) notre liste
                        array_push($troisParticularites, $particularite["NOM"]);
                        // On modifie notre boolean pour savoir que l'on a ajouté une particularité
                        $ajoute = true;
                        // On casse la boucle
                        break;
                    }
                }
                // Si aucune particularité n'a été trouvé pour cette recette
                if (!$ajoute) {
                    // On ajoute un élément
                    array_push($troisParticularites, "Pas de particularité");
                } else { // Sinon
                    // On remet notre boolean à faux
                    $ajoute = false;
                }
            }
            return $troisParticularites;
        }

    }