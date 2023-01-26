<?php

    final class ControleurAccueil {
        public function defautAction() {
            // A_Vue[$var] c'est le contenu de ça quoi
            $barreDeRecherche = new Recherche();
            Vue::montrer("accueil/entete");
            Vue::montrer("accueil/pageaccueil", array("barreDeRecherche" => $barreDeRecherche->rechercheRecette()));
            $arrayRecettes = Recettes::donneLesRecettes();
            Vue::montrer("accueil/imagesRecettes", array("images" => $arrayRecettes));
            Vue::montrer("accueil/recettesAleatoires", array("recettes" => $arrayRecettes));
        }

        public function testFormAction(Array $A_parametres = null, Array $A_postParams = null) {
            Vue::montrer("accueil/testform", array("formData" => $A_postParams));
        }
    }